<?php


$smarty = new Template();

$pedidos = new Pedidos();
$pedidos->getPedidosCliente();

$smarty->assign('PEDIDOS', $pedidos->getItens());
$smarty->assign('TOTAL_PEDIDOS', $pedidos->totalDados());
$pedidos->getPedidosRecente();
$smarty->assign('PEDIDO_RECENTE', $pedidos->getItens());
$smarty->assign('PAG_PEDIDOS', Rotas::pagPedidosAdm());
$smarty->assign('PAG_CLIENTES', Rotas::pagClientesAdm());

$clientes = new Clientes();
$clientes->getClientes();
$smarty->assign('CLIENTES', $clientes->totalDados());

$dados = array();
for($i = 1; $i <= 12; $i++){
    //Executa a função que contém a query select passando o parâmetro mês em $i
    $clientes->getClientesMes($i);
    //insere dados no array
    array_push($dados, $clientes->totalDados());
    //Separa cada resultado por ,
    $resultado = implode(",", $dados);
}

$pedidos_mes = new Pedidos();
$pedidos_por_mes = array();
for($i = 1; $i <= 12; $i++){
    //Executa a função que contém a query select passando o parâmetro mês em $i
    $pedidos_mes->pedidoMes($i);
    //insere dados no array
    array_push($pedidos_por_mes, $pedidos_mes->totalDados());
    //Separa cada resultado por ,
    $total_mes = implode(",", $pedidos_por_mes);
}

$smarty->assign('PEDIDOS_MES', $total_mes);
$smarty->assign('CLIENTES_CAD', $resultado);

$smarty->display('adm_home.tpl');