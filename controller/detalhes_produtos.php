<?php


//Instancias
$smarty = new Template();
$produtos = new Produtos();
//Para produtos relacionados
$listagem = new Produtos();
//Caracteristicas do produto
$caract = new Produtos();
$image = new ProdutoImages();
$image->GetImagePRO(Rotas::$pag[1]);
if(isset(Rotas::$pag[1])){
    $id = Rotas::$pag[1];
    $produtos->GetProdutos($id);
    $caract->GetCaractPro($id);
}
$listagem->GetProdutos();

/* echo '<pre>';
var_dump($produtos->GetItens());
echo '</pre>'; */


$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_REGISTER', Rotas::pag_Register());
$smarty->assign('PRODUTOS_INFO', $produtos->GetItens());
$smarty->assign('MAIS_PRODUTOS', $listagem->GetItens());
$smarty->assign('PAG_SHOPPING_ALTER', Rotas::pag_Shopping_Alter());
$smarty->assign('COMPRAR', Rotas::pag_Shopping_Alter());
$smarty->assign('PRO_CARACTERISTICAS', $caract->GetItens());
$smarty->assign('IMAGENS', $image->GetItens());
$smarty->assign('PRODUTO', Rotas::pag_Shopping_Detail());


$smarty->display('product.tpl');