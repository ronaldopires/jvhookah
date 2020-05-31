<?php


$smarty = new Template();
$login = new Login();

if (!Login::Logado()) {
    if (isset($_POST['cli_email']) && (isset($_POST['cli_senha']))) {
        $email = $_POST['cli_email'];
        $senha = addslashes($_POST['cli_senha']);
        $email = preg_replace("/[^[:alnum:]_.-@]/", '', $email);

        if($login->GetLogin($email, $senha)){ 
            isset($_SESSION['CARRINHO']) && !empty($_SESSION['CARRINHO']) ?  Rotas::redirecionar(0, Rotas::pagCarrinho()) : Rotas::redirecionar(0, Rotas::pagMeuPerfil());
        }
    }

    $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
    $smarty->assign('PAG_HOME', Rotas::getSiteHome());
    $smarty->assign('PAG_CADASTRO', Rotas::pagCadastro());
    $smarty->assign('PASS_RESET', Rotas::pagRecuperarSenha());

    $smarty->display('login.tpl');
} else {
    Rotas::redirecionar(0, Rotas::pagMeuPerfil());
}