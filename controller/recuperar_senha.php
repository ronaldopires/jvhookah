<?php

$smarty = new Template();
$log = new LogSystem();
$cliente = new Clientes();

if (isset($_POST['cli_email'])) {

    $cliente->setCli_email($_POST['cli_email']);

    if ($cliente->getClienteEmail($cliente->getCli_email()) == true) {
        $token = $cliente->getClienteEmail($cliente->getCli_email());

        $token = preg_replace("/[^[:alnum:]]/", '', $token);

        $link = '<a href="' . Rotas::pagNovaSenha() . '?token=' . $token . '" class="alert-link">' . Rotas::pagNovaSenha() . '?token=' . $token . '</a>';

        //Mensagem de Reset
        $message = '<div style="padding: 15px;text-align:center;"><h3><strong>Olá!</strong> Você solicitou um reset de senha em <strong>'
        . Config::SITE_NOME . ' no dia ' . Sistema::dataAtualBr() . ' às ' . Sistema::horaAtual() . '</strong></h3>
        <p>Acesse o link para inserir a nova senha ' . $link . '</p>
        Caso não tenha solicitado o reset ignore o e-mail!</div>';

        //Alterar email depois
        $email_cli = "ronaldo.carvalho@hotmail.com";
        //Envia o E-mail para o Cliente
        $email = new EnviarEmail();
        $assunto = 'Solicitação para Reset de Senha' . Config::SITE_NOME;
        $msg = $message;
        $destinatarios = array($email_cli);

        $email->enviarEmail($assunto, $msg, $destinatarios);

        $msg = "Solicitado recuperação de senha pelo email: {$email_cli}";
        $log->getLogger($msg, "conta");

        echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
                    <h4>Enviamos um link para você alterar sua senha.<h4>
                    <p>Acesse seu e-mail.</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>';
        exit();
    } else {
        $msg = "Erro na solicitação de recuperação de senha pelo email: {$email_cli}";
        $log->getLogger($msg, "conta");
        echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                    <h4>Email não cadastrado.<h4>
                    <p>Tente novamente</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>' . Rotas::redirecionar(3, Rotas::pagRecuperarSenha());
        exit();
    }

} else {
    $smarty->display('recuperar_senha.tpl');
}
