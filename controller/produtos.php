<?php


$smarty = new Template();
$produtos = new Produtos();
$categorias = new Categorias();


$categorias->GetCategorias();
/* $caract = new Produtos();
$caract->GetCaractPro(); */
if(isset(Rotas::$pag[1])){
    $id = Rotas::$pag[1];
    $produtos->GetProdutosCateID($id);
}else{
    $produtos->GetProdutos();
}

/* echo '<pre>';
var_dump($categorias->GetItens());
echo '</pre>'; */

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_REGISTER', Rotas::pag_Register());
$smarty->assign('PRODUTOS', $produtos->GetItens());
$smarty->assign('PRODUTOS_INFO', Rotas::pag_Shopping_Detail());
$smarty->assign('CATEGORIAS', $categorias->GetItens());


$smarty->display('shop.tpl');