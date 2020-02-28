<?php

$id = Rotas::$pag[1];

$smarty = new Template();
$produtos = new Produtos();
$produtos->GetProdutos($id);
//Para produtos relacionados
$listagem = new Produtos();
$listagem->GetProdutos();


$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_REGISTER', Rotas::pag_Register());
$smarty->assign('PRODUTOS_INFO', $produtos->GetItens());
$smarty->assign('MAIS_PRODUTOS', $listagem->GetItens());
$smarty->display('product.tpl');