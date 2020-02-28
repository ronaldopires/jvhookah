<?php


$smarty = new Template();
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_LOGIN', Rotas::pag_Login());

$smarty->display('register.tpl');