<?php

class Login extends Conexao
{
    private $email, $senha;

    public function __construct()
    {
        parent::__construct();
    }
    public function GetLogin($email, $senha)
    {
        $this->setEmail($email);
        $this->setSenha($senha);

        $query = "SELECT * FROM {$this->prefix}clientes WHERE cli_email = :email AND cli_senha = :senha";
        $params = array(
            ':email' => $this->getEmail(),
            ':senha' => $this->getSenha(),
        );

        $this->ExecuteSQL($query, $params);

        //Caso exista o usuário no banco as informações são armazenadas na lista
        if ($this->TotalDados() > 0) {
            $lista = $this->ListarDados();
            //Cria a sessão de usuário
            $_SESSION['CLI']['cli_id'] = $lista['cli_id'];
            $_SESSION['CLI']['cli_nome'] = $lista['cli_nome'];
            $_SESSION['CLI']['cli_sobrenome'] = $lista['cli_sobrenome'];
            $_SESSION['CLI']['cli_cpf'] = $lista['cli_cpf'];
            $_SESSION['CLI']['cli_data_nasc'] = $lista['cli_data_nasc'];
            $_SESSION['CLI']['cli_sexo'] = $lista['cli_sexo'];
            $_SESSION['CLI']['cli_celular'] = $lista['cli_celular'];
            $_SESSION['CLI']['cli_telefone'] = $lista['cli_telefone'];
            $_SESSION['CLI']['cli_email'] = $lista['cli_email'];
            $_SESSION['CLI']['cli_cep'] = $lista['cli_cep'];
            $_SESSION['CLI']['cli_endereco'] = $lista['cli_endereco'];
            $_SESSION['CLI']['cli_numero'] = $lista['cli_numero'];
            $_SESSION['CLI']['cli_bairro'] = $lista['cli_bairro'];
            $_SESSION['CLI']['cli_cidade'] = $lista['cli_cidade'];
            $_SESSION['CLI']['cli_uf'] = $lista['cli_uf'];
            $_SESSION['CLI']['cli_complemento'] = $lista['cli_complemento'];
            $_SESSION['CLI']['cli_data_cad'] = $lista['cli_data_cad'];
            $_SESSION['CLI']['cli_hora_cad'] = $lista['cli_hora_cad'];
        
            return TRUE;
        } else {
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Erro de usuário e/ou senha<h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>';
        }
    }

    // Verifica se está logado
    public static function Logado()
    {
        if ((isset($_SESSION['CLI']['cli_email']) && isset($_SESSION['CLI']['cli_id'])) && (($_SESSION['CLI']['cli_email'] != null) && ($_SESSION['CLI']['cli_id']) != null) && (($_SESSION['CLI']['cli_email'] != '') && ($_SESSION['CLI']['cli_id']) != '')) {
            return true;
        } else {
            return false;
        }
    }
    //Faz o Logoff
    public static function Logoff()
    {
        unset($_SESSION['CLI']);
        echo '<div class="container text-center alert alert-dismissible fade show alert-warning" role="alert">
            <h4>Efetuando Logoff<h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>' . Rotas::Redirecionar(2, Rotas::get_SiteHOME());
        exit();
    }

    //Getts and Setters
    private function setEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Endereço de E-mail inválido<h4>
            <p>Insira um endereço de E-mail válido</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>' . Rotas::Redirecionar(2, Rotas::pag_Login());
            exit();
        else:
            $this->email = $email;
        endif;
    
    }
    private function setSenha($senha)
    {
        if($senha == ' ' OR $senha == null){
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Formato de senha inválido<h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>' . Rotas::Redirecionar(2, Rotas::pag_Login());
            exit();
        }else{
            $this->senha = md5($senha);
        }
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getSenha()
    {
        return $this->senha;
    }
}
