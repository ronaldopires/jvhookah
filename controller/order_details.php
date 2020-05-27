<?php

$smarty = new Template();

if (Login::Logado()) {

    if(!isset($_POST['cod_pedido'])){
        Rotas::Redirecionar(0, Rotas::pag_Profile());
        exit();
    }
    $itens = new Itens();
    $pedido = filter_var($_POST['cod_pedido'], FILTER_SANITIZE_STRING);
    $itens->GetItensPedidos($pedido);
    
    $smarty->assign('ITENS', $itens->GetItens());
    $smarty->assign('TOTAL', Sistema::MoedaBR($itens->GetTotal()));
    $smarty->assign('PAG_PROFILE', Rotas::pag_Profile());
    $smarty->assign('PAG_HOME', Rotas::get_SiteHOME());

    
    $smarty->display('order-details.tpl');
} else {
    exit(Rotas::Redirecionar(0, Rotas::pag_Login()));
}