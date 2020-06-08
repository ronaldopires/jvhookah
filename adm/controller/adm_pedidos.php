<?php

$smarty = new Template();

$pedidos = new Pedidos();
$pedidos->getPedidosCliente();

$smarty->assign('PEDIDOS', $pedidos->getItens());
$pedidos->getPedidosRecente();
$smarty->assign('PEDIDO_RECENTE', $pedidos->getItens());
$smarty->assign('PAG_PEDIDOS', Rotas::pagPedidosAdm());
$smarty->assign('ITENS_PEDIDO', false);


if(isset(Rotas::$pag[1])){
    $ped = Rotas::$pag[1];
    $itens = new Itens();
    $itens->getItensPedidos($ped);
    $smarty->assign('ITENS_PEDIDO', $itens->getItens());
}

$clientes_pedidos = new Pedidos();
$clientes_pedidos->clientePedido();
$smarty->assign('CLIENTES_PEDIDOS', $clientes_pedidos->getItens());

$smarty->display('adm_pedidos.tpl');