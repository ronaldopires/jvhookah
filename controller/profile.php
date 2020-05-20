<?php

$smarty = new Template();

if (Login::Logado()) {

    $pedidos = new Pedidos();
    $pedidos->GetPedidosCliente($_SESSION['CLI']['cli_id']);

    $smarty->assign('PEDIDOS', $pedidos->GetItens());
    $smarty->assign('DETALHES_PEDIDOS', Rotas::pag_Order_Details());
    $smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
    $smarty->display('profile.tpl');
} else {
    exit(Rotas::Redirecionar(0, Rotas::pag_Login()));
}