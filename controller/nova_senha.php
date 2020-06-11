<?php

$smarty = new Template();
$log = new LogSystem();

if (isset($_GET['token']) && !empty($_GET['token'])) {
    $token = $_GET['token'];

    $msg = "Acesso na página de recuperação de senha com token = {$token}";
    $log->getLogger($msg, "conta");

    if (isset($_POST['cli_email']) && isset($_POST['cli_nova_senha']) && isset($_POST['cli_con_nova_senha'])) {
        $email = $_POST['cli_email'];
        $nova_senha = md5($_POST['cli_nova_senha']);
        $token = preg_replace("/[^[:alnum:]]/", '', $token);
        $email = preg_replace("/[^[:alnum:]_.-@]/", '', $email);

        $cliente = new Clientes();
        if($cliente->checkToken($email, $token)){
            $id = $cliente->checkToken($email, $token);
            if ($cliente->senhaUpdate($nova_senha, $id)) {
                $msg = "Senha alterada para o usuário email: {$email} e token: {$token}";
                $log->getLogger($msg, "conta");
                echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
                        <h4>Senha alterada com sucesso.<h4>
                        <p>Faça o login novamente</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button></div>' . Rotas::redirecionar(2, Rotas::pagLogin());
                exit();
            } else {
                $msg = "Erro ao alterar senha email: {$email} e token: {$token}";
                $log->getLogger($msg, "conta");
                echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                        <h4>Erro na operação<h4>
                        <p>Solicitar novo reset de senha</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button></div>' . Rotas::redirecionar(2, Rotas::pagLogin());
                exit();
            }
        }
        
        
    }

    $smarty->display('nova_senha.tpl');
} else {
    $msg = "Tentativa de acesso sem token ou com token incorreto";
    $log->getLogger($msg, "conta");
    include_once Rotas::pagError();
}
