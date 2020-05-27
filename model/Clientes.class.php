<?php

class Clientes extends Conexao
{
    private $cli_nome, 
    $cli_sobrenome, 
    $cli_cpf, 
    $cli_data_nasc, 
    $cli_sexo, 
    $cli_celular, 
    $cli_telefone, 
    $cli_email, 
    $cli_senha, 
    $cli_cep, 
    $cli_endereco, 
    $cli_numero, 
    $cli_bairro, 
    $cli_cidade, 
    $cli_uf, 
    $cli_complemento, 
    $cli_data_cad, 
    $cli_hora_cad;

    public function __construct()
    {
        parent::__construct();
    }
    //Função para preparar o cliente
    public function Preparar(
        $cli_nome,
        $cli_sobrenome,
        $cli_cpf,
        $cli_data_nasc,
        $cli_sexo,
        $cli_celular,
        $cli_telefone,
        $cli_email,
        $cli_senha,
        $cli_cep,
        $cli_endereco,
        $cli_numero,
        $cli_bairro,
        $cli_cidade,
        $cli_uf,
        $cli_complemento,
        $cli_data_cad,
        $cli_hora_cad
    ) {
        $this->setCli_nome($cli_nome);
        $this->setCli_sobrenome($cli_sobrenome);
        $this->setCli_cpf($cli_cpf);
        $this->setCli_data_nasc($cli_data_nasc);
        $this->setCli_sexo($cli_sexo);
        $this->setCli_celular($cli_celular);
        $this->setcli_telefone($cli_telefone);
        $this->setCli_email($cli_email);
        $this->setCli_senha($cli_senha);
        $this->setCli_cep($cli_cep);
        $this->setCli_endereco($cli_endereco);
        $this->setCli_numero($cli_numero);
        $this->setCli_bairro($cli_bairro);
        $this->setCli_cidade($cli_cidade);
        $this->setCli_uf($cli_uf);
        $this->setcli_complemento($cli_complemento);
        $this->setCli_data_cad($cli_data_cad);
        $this->setCli_hora_cad($cli_hora_cad);
    }
    //Função para preparar o cliente para editar dados
    public function PrepararEditarDados(
        $cli_nome,
        $cli_sobrenome,
        $cli_data_nasc,
        $cli_sexo,
        $cli_celular,
        $cli_telefone
    ) {
        $this->setCli_nome($cli_nome);
        $this->setCli_sobrenome($cli_sobrenome);
        $this->setCli_data_nasc($cli_data_nasc);
        $this->setCli_sexo($cli_sexo);
        $this->setCli_celular($cli_celular);
        $this->setcli_telefone($cli_telefone);
    }
    //Função para preparar o cliente para editar dados
    public function PrepararEditarEndereco(
        $cli_cep,
        $cli_endereco,
        $cli_numero,
        $cli_bairro,
        $cli_cidade,
        $cli_uf,
        $cli_complemento
    ) {
        $this->setCli_cep($cli_cep);
        $this->setCli_endereco($cli_endereco);
        $this->setCli_numero($cli_numero);
        $this->setCli_bairro($cli_bairro);
        $this->setCli_cidade($cli_cidade);
        $this->setCli_uf($cli_uf);
        $this->setcli_complemento($cli_complemento);
    }

    public function GetClientes()
    {
        $query = " SELECT * FROM {$this->prefix}clientes ";

        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    public function GetClientesMonth($mes)
    {
        $query = " SELECT * FROM {$this->prefix}clientes WHERE month(cli_data_cad) = '$mes'";
        $this->ExecuteSQL($query);
    }

    /**
     *
     * @param INT $id id do cliente
     */
    public function GetClientesID($id)
    {

        // monto a SQL
        $query = " SELECT * FROM {$this->prefix}clientes WHERE cli_id = :id";

        // passo parametros
        $params = array(':id' => (int) $id);
        //executo a SQL
        $this->ExecuteSQL($query, $params);
        // chamo a listagem
        $this->GetLista();
    }

    /**
     * fazendo a listagem dos dados retornados
     */
    private function GetLista()
    {

        $i = 1;
        while ($lista = $this->ListarDados()):

            $this->itens[$i] = array(

                'cli_id' => $lista['cli_id'],
                'cli_nome' => $lista['cli_nome'],
                'cli_sobrenome' => $lista['cli_sobrenome'],
                'cli_cpf' => $lista['cli_cpf'],
                'cli_data_nasc' => Sistema::Fdata($lista['cli_data_nasc']),
                'cli_sexo' => $lista['cli_sexo'],
                'cli_celular' => $lista['cli_celular'],
                'cli_telefone' => $lista['cli_telefone'],
                'cli_email' => $lista['cli_email'],
                // 'cli_senha' => $lista['cli_senha'],
                'cli_cep' => $lista['cli_cep'],
                'cli_endereco' => $lista['cli_endereco'],
                'cli_numero' => $lista['cli_numero'],
                'cli_bairro' => $lista['cli_bairro'],
                'cli_cidade' => $lista['cli_cidade'],
                'cli_uf' => $lista['cli_uf'],
                'cli_complemento' => $lista['cli_complemento'],
                'cli_hora_cad' => $lista['cli_hora_cad'],
                'cli_data_cad' => Sistema::Fdata($lista['cli_data_cad']),

            );

            $i++;

        endwhile;
    }

    public function Inserir()
    {
        if ($this->GetClienteCPF($this->getCli_cpf()) > 0) {
            echo '<div class="alert alert-danger text-center cli_telefone" id="mostrar_erro"> Este CPF já existe </div>';
            Rotas::Redirecionar(2, Rotas::pag_Login());
            exit();
        }
        if ($this->GetClienteEmail($this->getCli_email()) > 0) {
            echo '<div class="alert alert-danger text-center" id="mostrar_erro"> Este E-mail já existe </div>';
            Rotas::Redirecionar(2, Rotas::pag_Login());
            exit();
        }
        //query para inserir clientes
        $query = "INSERT INTO {$this->prefix}clientes (cli_nome, cli_sobrenome, cli_cpf, cli_data_nasc, cli_sexo, cli_celular, cli_telefone, cli_email, cli_senha, cli_cep, cli_endereco, cli_numero, cli_bairro, cli_cidade, cli_uf, cli_complemento, cli_data_cad, cli_hora_cad)";
        $query .=" VALUES (:cli_nome, :cli_sobrenome, :cli_cpf, :cli_data_nasc, :cli_sexo, :cli_celular, :cli_telefone, :cli_email, :cli_senha, :cli_cep, :cli_endereco, :cli_numero, :cli_bairro, :cli_cidade, :cli_uf, :cli_complemento, :cli_data_cad, :cli_hora_cad) ";

        $params = array(
            ':cli_nome' => $this->getCli_nome(),
            ':cli_sobrenome' => $this->getCli_sobrenome(),
            ':cli_cpf' => $this->getCli_cpf(),
            ':cli_data_nasc' => $this->getCli_data_nasc(),
            ':cli_sexo' => $this->getCli_sexo(),
            ':cli_celular' => $this->getCli_celular(),
            ':cli_telefone' => $this->getcli_telefone(),
            ':cli_email' => $this->getCli_email(),
            ':cli_senha' => $this->getCli_senha(),
            ':cli_cep' => $this->getCli_cep(),
            ':cli_endereco' => $this->getCli_endereco(),
            ':cli_numero' => $this->getCli_numero(),
            ':cli_bairro' => $this->getCli_bairro(),
            ':cli_cidade' => $this->getCli_cidade(),
            ':cli_uf' => $this->getCli_uf(),
            ':cli_complemento' => $this->getcli_complemento(),
            ':cli_data_cad' => $this->getCli_data_cad(),
            ':cli_hora_cad' => $this->getCli_hora_cad(),
        );
    
        $this->ExecuteSQL($query, $params);
    }

    //Metodo para editar os dados do cliente
    public function EditarDados($id)
    {

        $query = " UPDATE {$this->prefix}clientes SET cli_nome=:cli_nome, cli_sobrenome=:cli_sobrenome, cli_data_nasc=:cli_data_nasc, cli_sexo=:cli_sexo,";
        $query .= " cli_celular=:cli_celular, cli_telefone=:cli_telefone ";
        $query .= " WHERE  cli_id = :cli_id";

        $params = array(
            ':cli_nome' => $this->getCli_nome(),
            ':cli_sobrenome' => $this->getCli_sobrenome(),
            ':cli_data_nasc' => $this->getCli_data_nasc(),
            ':cli_sexo' => $this->getCli_sexo(),
            ':cli_celular' => $this->getCli_celular(),
            ':cli_telefone' => $this->getcli_telefone(),
            ':cli_id' => (int) $id
        );

        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }
    public function EditarEndereco($id)
    {

        $query = " UPDATE {$this->prefix}clientes SET cli_cep=:cli_cep, cli_endereco=:cli_endereco, cli_numero=:cli_numero, cli_bairro=:cli_bairro, ";
        $query .= " cli_cidade=:cli_cidade ,cli_uf=:cli_uf, cli_complemento=:cli_complemento ";
        $query .= " WHERE  cli_id = :cli_id";

        $params = array(
            ':cli_cep' => $this->getCli_cep(),
            ':cli_endereco' => $this->getCli_endereco(),
            ':cli_numero' => $this->getCli_numero(),
            ':cli_bairro' => $this->getCli_bairro(),
            ':cli_cidade' => $this->getCli_cidade(),
            ':cli_uf' => $this->getCli_uf(),
            ':cli_complemento' => $this->getcli_complemento(),
            ':cli_id' => (int) $id
        );

        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }

    public function EditarADM($id)
    {
        // verifico se ja tem este CPF no banco
        if ($this->GetClienteCPF($this->getCli_cpf()) > 0 && $this->getCli_cpf() != $_REQUEST['cli_cpf']):
            echo '<div class="alert alert-danger " id="erro_mostrar"> Este CPF já esta cadastrado ';
            Sistema::VoltarPagina();
            echo '</div>';
            exit();
        endif;
        // verifica se o email já esta cadstrado
        if ($this->GetClienteEmail($this->getCli_email()) > 0 && $this->getCli_email() != $_REQUEST['cli_email']):
            echo '<div class="alert alert-danger " id="erro_mostrar"> Este Email já esta cadastrado ';
            Sistema::VoltarPagina();
            echo '</div>';
            exit();
        endif;

        // caso passou na verificação grava no banco

        $query = " UPDATE {$this->prefix}clientes SET cli_nome=:cli_nome, cli_sobrenome=:cli_sobrenome,cli_data_nasc=:cli_data_nasc,cli_sexo=:cli_sexo,";
        $query .= " cli_complemento=:cli_complemento,cli_telefone=:cli_telefone,cli_celular=:cli_celular ,cli_endereco=:cli_endereco ,cli_numero=:cli_numero,cli_bairro=:cli_bairro ,";
        $query .= " cli_cidade=:cli_cidade ,cli_uf=:cli_uf ,cli_cep=:cli_cep ,cli_email=:cli_email  ";
        $query .= " WHERE  cli_id = :cli_id";
        
        $params = array(
            ':cli_nome' => $this->getCli_nome(),
            ':cli_sobrenome' => $this->getCli_sobrenome(),
            ':cli_data_nasc' => $this->getCli_data_nasc(),
            ':cli_sexo' => $this->getCli_sexo(),
            ':cli_celular' => $this->getCli_celular(),
            ':cli_complemento' => $this->getcli_complemento(),
            ':cli_telefone' => $this->getcli_telefone(),
            ':cli_endereco' => $this->getCli_endereco(),
            ':cli_numero' => $this->getCli_numero(),
            ':cli_bairro' => $this->getCli_bairro(),
            ':cli_cidade' => $this->getCli_cidade(),
            ':cli_uf' => $this->getCli_uf(),
            ':cli_cep' => $this->getCli_cep(),
            ':cli_email' => $this->getCli_email(),
            ':cli_id' => (int) $id,

        );

        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }

    //Buscar se o CPF do cliente já existe
    public function GetClienteCPF($cpf)
    {
        $query = "SELECT * FROM {$this->prefix}clientes WHERE cli_cpf = :cpf";
        $params = array(':cpf' => $cpf);
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();
    }
    //Procura pelo e-mail do cliente para resetar senha
    public function GetClienteEmail($email)
    {
        $query = "SELECT * FROM {$this->prefix}clientes WHERE cli_email = :email";
        $params = array(':email' => $email);
        $this->ExecuteSQL($query, $params);
        
        if($this->TotalDados() > 0){
            $lista = $this->ListarDados();

            $id = $lista['cli_id'];
            $senha = $lista['cli_senha'];
            $data = $lista['cli_data_nasc'];
            $token = $id.$senha.$data;

            return md5($token);
        }else{
            return FALSE;
        }
        
    }
    //Função do Token
    public function CheckToken($email,$token){
        
        $query = "SELECT * FROM {$this->prefix}clientes WHERE cli_email = :email";
        $params = array(':email' => $email);
        $this->ExecuteSQL($query, $params);
        
        if($this->TotalDados() > 0){
            $lista = $this->ListarDados();

            $id = $lista['cli_id'];
            $senha = $lista['cli_senha'];
            $email = $lista['cli_email'];
            $data = $lista['cli_data_nasc'];
            $chave = $id.$senha.$data;
            $chave_correta = md5($chave);


            if($token === $chave_correta){
                return $id;
            }else{
                echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                    <h4>Erro na operação<h4>
                    <p>Solicitar novo reset de senha</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>' . Rotas::Redirecionar(2, Rotas::pag_Login());
                    exit();
            }
        }
    }

    //Função de Update de senha no banco
    public function SenhaUpdate($senha, $id)
    {
        $query = "UPDATE {$this->prefix}clientes SET cli_senha = :senha WHERE cli_id = :id";
        
        $params = array(
            ':senha' => $senha, 
            ':id' => $id
        );
        $this->ExecuteSQL($query, $params);
        return TRUE;
    }

    //Função de senha cliente
    public function SenhaCliente($id){
        $query = "SELECT cli_email, cli_senha FROM {$this->prefix}clientes WHERE cli_id = :id";

        $params = array(
            ':id' => $id
        );
        $this->ExecuteSQL($query, $params);
        $this->GetListaCliSenha();
    }
    public function GetListaCliSenha(){
        $i = 1;
        while ($lista = $this->ListarDados()):

            $this->itens[$i] = array(
                'cli_email' => $lista['cli_email'],
                'cli_senha' => $lista['cli_senha'],
            );
            $i++;
        endwhile;
    }

    //Função para excluir cliente
    public function Excluir($id){
        $query = "DELETE FROM {$this->prefix}clientes WHERE cli_id = :id";
        $params = array(
            ':id' => (int) $id,
        );

        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }

    // GETTERS retornando os dados do cliente
    public function getCli_nome()
    {
        return $this->cli_nome;
    }
    public function getCli_sobrenome()
    {
        return $this->cli_sobrenome;
    }
    public function getCli_cpf()
    {
        return $this->cli_cpf;
    }
    public function getCli_data_nasc()
    {
        return $this->cli_data_nasc;
    }
    public function getCli_sexo()
    {
        return $this->cli_sexo;
    }
    public function getCli_celular()
    {
        return $this->cli_celular;
    }
    public function getcli_complemento()
    {
        return $this->cli_complemento;
    }
    public function getcli_telefone()
    {
        return $this->cli_telefone;
    }
    public function getCli_email()
    {
        return $this->cli_email;
    }
    public function getCli_senha()
    {
        return $this->cli_senha;
    }

    public function getCli_cep()
    {
        return $this->cli_cep;
    }
    public function getCli_endereco()
    {
        return $this->cli_endereco;
    }
    public function getCli_numero()
    {
        return $this->cli_numero;
    }
    public function getCli_bairro()
    {
        return $this->cli_bairro;
    }
    public function getCli_cidade()
    {
        return $this->cli_cidade;
    }
    public function getCli_uf()
    {
        return $this->cli_uf;
    }
    public function getCli_data_cad()
    {
        return $this->cli_data_cad;
    }
    public function getCli_hora_cad()
    {
        return $this->cli_hora_cad;
    }

    //SETTERS do cliente

    public function setCli_nome($cli_nome)
    {
        if (strlen($cli_nome) < 3): echo '<div class="alert alert-danger " id="erro_mostrar"> Digite seu nome ';
            Sistema::VoltarPagina();
            echo '</div>';
        else:
            $this->cli_nome = $cli_nome;
        endif;
    }

    public function setCli_sobrenome($cli_sobrenome)
    {
        if (strlen($cli_sobrenome) < 3): echo '<div class="alert alert-danger " id="erro_mostrar"> Digite seu sobrenome ';
            Sistema::VoltarPagina();
            echo '</div>';
        else:
            $this->cli_sobrenome = $cli_sobrenome;
        endif;
    }

    public function setCli_cpf($cli_cpf)
    {
        $this->cli_cpf = $cli_cpf;
    }
    public function setCli_data_nasc($cli_data_nasc)
    {
        $this->cli_data_nasc = $cli_data_nasc;
    }
    public function setCli_sexo($cli_sexo)
    {
        $this->cli_sexo = $cli_sexo;
    }
    public function setCli_celular($cli_celular)
    {
        $this->cli_celular = $cli_celular;
    }
    public function setcli_complemento($cli_complemento)
    {
        $this->cli_complemento = $cli_complemento;
    }
    public function setcli_telefone($cli_telefone)
    {
        $this->cli_telefone = $cli_telefone;
    }
    public function setCli_email($cli_email)
    {
        if (!filter_var($cli_email, FILTER_VALIDATE_EMAIL)):

            echo '<div class="alert alert-danger " id="erro_mostrar"> Email incorreto ';
            Sistema::VoltarPagina();
            echo '</div>';

            exit();

        else:

            $this->cli_email = $cli_email;
        endif;
    }
    public function setCli_senha($cli_senha)
    {
        $this->cli_senha = md5($cli_senha);
    }

    public function setCli_cep($cli_cep)
    {
        $cep = filter_var($cli_cep, FILTER_SANITIZE_NUMBER_INT);

        if (strlen($cep) != 8):
            echo '<div class="alert alert-danger " id="erro_mostrar"> CEP incorreto ';
            Sistema::VoltarPagina();
            echo '</div>';

        else:
            $this->cli_cep = $cli_cep;

        endif;
    }
    public function setCli_endereco($cli_endereco)
    {
        $this->cli_endereco = $cli_endereco;
    }
    public function setCli_numero($cli_numero)
    {
        $this->cli_numero = $cli_numero;
    }
    public function setCli_bairro($cli_bairro)
    {
        $this->cli_bairro = $cli_bairro;
    }
    public function setCli_cidade($cli_cidade)
    {
        $this->cli_cidade = $cli_cidade;
    }
    public function setCli_uf($cli_uf)
    {
        $uf = filter_var($cli_uf, FILTER_SANITIZE_STRING);

        if (strlen($uf) != 2): // 11111
            echo '<div class="alert alert-danger " id="erro_mostrar"> UF incorreto ';
            Sistema::VoltarPagina();
            echo '</div>';

        else:
            $this->cli_uf = $cli_uf;

        endif;
    }
    public function setCli_data_cad($cli_data_cad)
    {
        $this->cli_data_cad = $cli_data_cad;
    }
    public function setCli_hora_cad($cli_hora_cad)
    {
        $this->cli_hora_cad = $cli_hora_cad;
    }
}