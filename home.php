<?php

//$produtos = new Produtos();
//$produtos->GetProdutos();

$smarty = new Template();
$categorias = new Categorias();
$categorias->GetSubCategorias();


$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('CATEGORIAS', $categorias->GetItens());

/* echo "<pre>";
var_dump($produtos->GetItens());
echo "</pre>"; */

$smarty->display('home.tpl');