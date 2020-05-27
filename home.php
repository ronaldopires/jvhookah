<?php

//$produtos = new Produtos();
//$produtos->GetProdutos();

$smarty = new Template();
$categorias = new Categorias();
$categorias->GetSubCategorias();

$categoria = new Categorias();
$categoria->GetCategorias();

$produtos = new Produtos();
$produtos->GetProdutos();

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('CATEGORIA', $categoria->GetItens());
$smarty->assign('PRODUTOS', $produtos->GetItens());

/* echo "<pre>";
var_dump($produtos->GetItens());
echo "</pre>"; */

$smarty->display('home.tpl');