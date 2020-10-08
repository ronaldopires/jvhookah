<?php

$smarty = new Template();
$pagSeguro = new PagamentoPS();



if(isset(Rotas::$pag[1])){
    $pagSeguro->notificacao();
    $ref = Rotas::$pag[1];
    $pagSeguro->buscarTransacaoREF($ref);
    
    $smarty->assign('DATA', $pagSeguro->info['data']);
    $smarty->assign('STATUS', $pagSeguro->info['status']);
    $smarty->assign('CODIGO', $pagSeguro->info['codigo']);
    $smarty->assign('REF', $pagSeguro->info['referencia']);
    $smarty->assign('FORMA_PAG', $pagSeguro->info['forma_pag']);
    $smarty->assign('VALOR_TOTAL', $pagSeguro->info['valor_total']);

}

$smarty->assign('PAG_HOME', Rotas::getSiteHome());

$smarty->display('pedido-concluido.tpl');