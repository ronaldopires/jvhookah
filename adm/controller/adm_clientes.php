<?php

$smarty = new Template();

$clientes = new Clientes();

$smarty->assign('ONLINE', $clientes->cliOnline());
$smarty->assign('OFFLINE', $clientes->cliOffline());

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
$smarty->assign('CLIENTES_CAD', $resultado);


$smarty->display('adm_clientes.tpl');