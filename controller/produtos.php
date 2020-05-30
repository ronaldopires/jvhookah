<?php

$smarty = new Template();
$produtos = new Produtos();
$categorias = new Categorias();

//CATEGORIAS E SUB CATEGORIAS
$categoria = 'categoria';;
$sub_categoria = 'sub_categoria';
if (isset(Rotas::$pag[1]) && Rotas::$pag[1] == $categoria) {
    $id = Rotas::$pag[2];
    $produtos->GetProdutosCateID($id);
    $smarty->assign('PRODUTOS', $produtos->GetItens());
    $smarty->assign('PAGINAS', $produtos->MostrarPaginacao());

} else if (isset(Rotas::$pag[1]) && Rotas::$pag[1] == $sub_categoria) {
    $id = Rotas::$pag[2];
    $produtos->GetProdutosSubCateID($id);
    $smarty->assign('PRODUTOS', $produtos->GetItens());
    $smarty->assign('PAGINAS', $produtos->MostrarPaginacao());
}else{
    $produtos->GetProdutos();
    $smarty->assign('PRODUTOS', $produtos->GetItens());
    $smarty->assign('PAGINAS', $produtos->MostrarPaginacao());

}

//Listando mais produtos
if($produtos->TotalDados() < 1){
    $listagem = new Produtos();
    $listagem->GetProdutos();
    $smarty->assign('MAIS_PRODUTOS', $listagem->GetItens());
    $smarty->assign('ITENS', $produtos->TotalDados());

}else{
    $smarty->assign('ITENS', $produtos->TotalDados());
}

$marca = new Categorias();
$marca->GetMarcas();
$categorias->GetCategorias();
$sub_categorias = new Categorias();
$sub_categorias->GetSubCategorias();

//Filtro de ordenação
if (isset($_POST['opcoes'])) {

    switch ($_POST['opcoes']) {
        case 0:
            $opcao = 0;
            $produtos->OrderByProducts($opcao);
            break;
        case 1:
            $opcao = 1;
            $produtos->OrderByProducts($opcao);
            break;
        case 2:
            $opcao = 2;
            $produtos->OrderByProducts($opcao);
            break;
        case 3:
            $opcao = 3;
            $produtos->OrderByProducts($opcao);
            break;
        case 4:
            $opcao = 4;
            $produtos->OrderByProducts($opcao);
            break;
        case 5:
            $opcao = 5;
            $produtos->OrderByProducts($opcao);
            break;
    }
    $smarty->assign('PRODUTOS', $produtos->GetItens());
    $smarty->assign('PAGINAS', $produtos->MostrarPaginacao());


}

/**
 * Filtro de marcas
 * Pesquisar método melhor para exibir produtos
 */
if (isset($_POST['checked'])) {
    $filtro_marcas = new Categorias();
    $check = count($_POST['checked']);
    $resultado = array();
    foreach($_POST['checked'] as $id){
        $filtro_marcas->GetMarcasProducts($id);
        array_push($resultado, $filtro_marcas->GetItens());
                
        $smarty->assign('PRODUTOS', $filtro_marcas->GetItens());
    }
    $smarty->assign('PAGINAS', $filtro_marcas->MostrarPaginacao());
}

//FILTRO PREÇO
$min = (int) $produtos->GetProdutosPriceMin()['MIN(pro_valor)'];
$max = (int) $produtos->GetProdutosPriceMax()['MAX(pro_valor)'];
if (isset($_POST['price_min']) and isset($_POST['price_min'])) {

    $price_min = $_POST['price_min'];
    $price_max = $_POST['price_max'];

    $result_min = substr_replace($price_min, '', 0, 2);
    $result_max = substr_replace($price_max, '', 0, 2);
    $betweenProducts = new Produtos();
    $betweenProducts->GetProdutosBetween($result_min, $result_max);
    $smarty->assign('PRODUTOS', $betweenProducts->GetItens());
    $smarty->assign('PAGINAS', $betweenProducts->MostrarPaginacao());
 
}
$smarty->assign('MIN', $min);
$smarty->assign('MAX', $max);



if(isset($_SESSION['PROF'])){
    $smarty->assign('ITENS_FAVORITOS', $_SESSION['PROF']);
}

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_REGISTER', Rotas::pag_Register());
$smarty->assign('PRODUTOS_INFO', Rotas::pag_Shopping_Detail());
$smarty->assign('GET_IMAGE', Rotas::get_ImagePasta());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('FAVORITOS', Rotas::pag_Produtos_Favoritos());
$smarty->assign('PAG_SHOP', Rotas::pag_Produtos());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('SUB_CATEGORIAS', $sub_categorias->GetItens());
$smarty->assign('MARCAS', $marca->Getitens());
$smarty->assign('TOTAL', $produtos->TotalDados());


$smarty->display('shop.tpl');
