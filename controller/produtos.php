<?php

$smarty = new Template();
$produtos = new Produtos();
$categorias = new Categorias();

//CATEGORIAS E SUB CATEGORIAS
$categoria = 'categoria';
$sub_categoria = 'sub_categoria';
if (isset(Rotas::$pag[1]) && Rotas::$pag[1] == $categoria) {
    $id = Rotas::$pag[2];
    $produtos->getProdutosCateID($id);
    $smarty->assign('PRODUTOS', $produtos->getItens());
    $smarty->assign('PAGINAS', $produtos->mostrarPaginacao());

} else if (isset(Rotas::$pag[1]) && Rotas::$pag[1] == $sub_categoria) {
    $id = Rotas::$pag[2];
    $produtos->getProdutosSubCateID($id);
    $smarty->assign('PRODUTOS', $produtos->getItens());
    $smarty->assign('PAGINAS', $produtos->mostrarPaginacao());
} else {
    $produtos->getProdutos();
    $smarty->assign('PRODUTOS', $produtos->getItens());
    $smarty->assign('PAGINAS', $produtos->mostrarPaginacao());

}

//Listando mais produtos
if ($produtos->totalDados() < 1) {
    $listagem = new Produtos();
    $listagem->getProdutos();
    $smarty->assign('MAIS_PRODUTOS', $listagem->getItens());
    $smarty->assign('ITENS', $produtos->totalDados());

} else {
    $smarty->assign('ITENS', $produtos->totalDados());
}

$marca = new Categorias();
$marca->GetMarcas();
$categorias->getCategorias();
$sub_categorias = new Categorias();
$sub_categorias->getSubCategorias();

//Filtro de ordenação
if (isset($_POST['opcoes'])) {

    switch ($_POST['opcoes']) {
        case 0:
            $opcao = 0;
            $produtos->ordenarPro($opcao);
            break;
        case 1:
            $opcao = 1;
            $produtos->ordenarPro($opcao);
            break;
        case 2:
            $opcao = 2;
            $produtos->ordenarPro($opcao);
            break;
        case 3:
            $opcao = 3;
            $produtos->ordenarPro($opcao);
            break;
        case 4:
            $opcao = 4;
            $produtos->ordenarPro($opcao);
            break;
        case 5:
            $opcao = 5;
            $produtos->ordenarPro($opcao);
            break;
    }
    $smarty->assign('PRODUTOS', $produtos->getItens());
    $smarty->assign('PAGINAS', $produtos->mostrarPaginacao());

}

/**
 * Filtro de marcas
 * Pesquisar método melhor para exibir produtos
 */
if (isset($_POST['checked'])) {
    $filtro_marcas = new Categorias();
    $check = count($_POST['checked']);
    $resultado = array();
    foreach ($_POST['checked'] as $id) {
        $filtro_marcas->GetMarcasProducts($id);
        array_push($resultado, $filtro_marcas->getItens());

        $smarty->assign('PRODUTOS', $filtro_marcas->getItens());
    }
    $smarty->assign('PAGINAS', $filtro_marcas->mostrarPaginacao());
}

//FILTRO PREÇO
$min = (int) $produtos->getProdutosPrecoMin()['MIN(pro_valor)'];
$max = (int) $produtos->getProdutosPrecoMax()['MAX(pro_valor)'];
if (isset($_POST['price_min']) and isset($_POST['price_min'])) {

    $price_min = $_POST['price_min'];
    $price_max = $_POST['price_max'];

    $result_min = substr_replace($price_min, '', 0, 2);
    $result_max = substr_replace($price_max, '', 0, 2);
    $betweenProducts = new Produtos();
    $betweenProducts->getProdutosBetween($result_min, $result_max);
    $smarty->assign('PRODUTOS', $betweenProducts->getItens());
    $smarty->assign('PAGINAS', $betweenProducts->mostrarPaginacao());

}
$smarty->assign('MIN', $min);
$smarty->assign('MAX', $max);

if (isset($_SESSION['FAVORITOS'])) {
    $smarty->assign('ITENS_FAVORITOS', $_SESSION['FAVORITOS']);
}

if(isset($_POST['pesquisar'])){
    $pesquisa = new Produtos();
    $listagem = new Produtos();
    $listagem->getProdutos();
    $nome = filter_var($_POST['pesquisar'], FILTER_SANITIZE_STRING);
    if($pesquisa->pesquisarProduto($nome)){
        $smarty->assign('PRODUTOS', $pesquisa->getItens());
        $smarty->assign('PAGINAS',  $pesquisa->mostrarPaginacao());

    }else{
        $smarty->assign('MAIS_PRODUTOS', $listagem->getItens());
        $smarty->assign('ITENS', $pesquisa->totalDados());
        $smarty->assign('PAGINAS', );

    }
}

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_HOME', Rotas::getSiteHome());
$smarty->assign('PAG_DETALHES_PRODUTO', Rotas::pagDetalhesProduto());
$smarty->assign('GET_IMAGE', Rotas::getImagePasta());
$smarty->assign('PAG_PRODUTOS', Rotas::pagProdutos());
$smarty->assign('FAVORITOS', Rotas::pagProdutosFavoritos());
$smarty->assign('CATEGORIAS', $categorias->getItens());
$smarty->assign('SUB_CATEGORIAS', $sub_categorias->getItens());
$smarty->assign('MARCAS', $marca->getItens());

$smarty->display('produtos.tpl');
