<?php


$smarty = new Template();
$login = new Login();


if(isset($_POST['email']) && (isset($_POST['senha']))){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $login->GetLogin($email, $senha);
    $_SESSION['PRO'] ? Rotas::Redirecionar(0, Rotas::pag_Shopping_Cart()) : Rotas::Redirecionar(0, Rotas::pag_Profile());
}

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_REGISTER', Rotas::pag_Register());

$smarty->display('login.tpl');