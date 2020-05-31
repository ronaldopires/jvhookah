<?php

//$produtos = new Produtos();
//$produtos->GetProdutos();

$smarty = new Template();
$categorias = new Categorias();
$categorias->GetSubCategorias();

$categoria = new Categorias();
$categoria->GetCategorias();

$produtos = new Produtos();
$produtos->getProdutos();

$mais_vendidos = new Produtos();
$mais_vendidos->ProdutosMaisvendidos();

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('CATEGORIAS', $categorias->getItens());
$smarty->assign('CATEGORIA', $categoria->getItens());
$smarty->assign('PRODUTOS', $produtos->getItens());
$smarty->assign('PAG_DETALHES_PRODUTO', Rotas::pagDetalhesProduto());
$smarty->assign('MAIS_VENDIDOS', $mais_vendidos->getItens());
$smarty->assign('FAVORITOS', Rotas::pagProdutosFavoritos());


/* echo "<pre>";
var_dump($produtos->GetItens());
echo "</pre>"; */

$smarty->display('home.tpl');