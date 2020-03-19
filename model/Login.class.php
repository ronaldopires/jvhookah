<?php

class Login extends Conexao
{
    private $user, $senha;

    public function __construct()
    {
        parent::__construct();
    }
    public function GetLogin($user, $senha)
    {
        $this->setUser($user);
        $this->setSenha($senha);

        $query = "SELECT * FROM {$this->prefix}clientes WHERE cli_email = :email AND cli_senha = :senha";
        $params = array(
            ':email' => $this->getUser(),
            ':senha' => $this->getsenha(),
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
            $_SESSION['CLI']['cli_email'] = $lista['cli_email'];
            $_SESSION['CLI']['cli_senha'] = $lista['cli_senha'];
            $_SESSION['CLI']['cli_ddd'] = $lista['cli_ddd'];
            $_SESSION['CLI']['cli_celular'] = $lista['cli_celular'];
            $_SESSION['CLI']['cli_data_nasc'] = $lista['cli_data_nasc'];
            $_SESSION['CLI']['cli_data_cad'] = $lista['cli_data_cad'];
            $_SESSION['CLI']['cli_hora_cad'] = $lista['cli_hora_cad'];
            
        } else {
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Erro de usuário e/ou senha<h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>' . Rotas::Redirecionar(3, Rotas::pag_Login());
        }
    }

    // Verifica se está logado
    public static function Logado()
    {
        if (isset($_SESSION['CLI']['cli_email']) && isset($_SESSION['CLI']['cli_id'])) {
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
            </button></div>' . Rotas::Redirecionar(3, Rotas::get_SiteHOME());
        exit();
    }

    //Getts and Setters
    private function setUser($user)
    {
        $this->user = $user;
    }
    private function setSenha($senha)
    {
        $this->senha = /* Sistema::Criptografia( */$senha/* ) */;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function getSenha()
    {
        return $this->senha;
    }
}
