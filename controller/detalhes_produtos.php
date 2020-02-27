<?php


$smarty = new Template();
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_HOME', Rotas::pag_Home());
$smarty->assign('PAG_REGISTER', Rotas::pag_Register());

$smarty->display('product.tpl');