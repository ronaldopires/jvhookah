<?php

date_default_timezone_set('America/Sao_Paulo');

if (!isset($_SESSION)) {
    session_start();
}

require '../lib/autoload.php';

$smarty = new Template();

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('GET_HOME', Rotas::getSiteHome());
$smarty->assign('PAG_HOME', Rotas::getSiteAdm());
$smarty->assign('PAG_PEDIDOS', Rotas::pagPedidosAdm());
$smarty->assign('PAG_CLIENTES', Rotas::pagClientesAdm());


$smarty->display('adm_index.tpl');