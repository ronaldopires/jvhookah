<?php


$smarty = new Template();
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_HOME', Rotas::getSiteHome());

$smarty->display('perguntas-frequentes.tpl');