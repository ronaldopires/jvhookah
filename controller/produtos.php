<?php


$smarty = new Template();
$produtos = new Produtos();
$produtos->GetProdutos();


$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_REGISTER', Rotas::pag_Register());
$smarty->assign('PRODUTOS', $produtos->GetItens());
$smarty->assign('PRODUTOS_INFO', Rotas::pag_Shopping_Detail());

$smarty->display('shop.tpl');