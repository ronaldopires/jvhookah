<?php

$smarty = new Template();
$produtos = new Produtos();
$categorias = new Categorias();
//Buscar produtos de uma categoria especifica
if (isset(Rotas::$pag[1])) {
    $id = Rotas::$pag[1];
    $produtos->GetProdutosCateID($id);
} else {
    $produtos->GetProdutos();
}
//Listando mais produtos
$listagem = new Produtos();
$listagem->GetProdutos();
$marca = new Categorias();
$marca->GetMarcas();
$categorias->GetCategorias();
$sub_categorias = new Categorias();
$sub_categorias->GetSubCategorias();
$valor = new Produtos();

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
            //$opcao = 3;
            //$produtos->OrderByProducts($opcao);
            echo "Ordenar pelo mais recente ";
            echo "Indisponível no momento";
            //Criar campo data na tabela de produtos
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
}
// $smarty->assign('PRODUTOS', $produtos->GetItens());

$filtro = new Categorias();
if (isset($_POST['checked'])) {
    $tamanho = count($_POST['checked']);

    foreach($_POST['checked'] as $key){
        $indice = $key;
        $filtro->GetMarcasProducts($indice);
        $teste = $filtro->GetItens();
        array_push($teste, $filtro->GetItens());
        var_dump($teste);
    }

    $smarty->assign('PRODUTOS', $teste[0]);
    
}

//Filter price products
$min = (int) $valor->GetProdutosPriceMin()['MIN(pro_valor)'];
$max = (int) $valor->GetProdutosPriceMax()['MAX(pro_valor)'];

if (isset($_POST['price_min']) and isset($_POST['price_min'])) {
    $price_min = $_POST['price_min'];
    $price_max = $_POST['price_max'];

    $result_min = substr_replace($price_min, '', 0, 2);
    $result_max = substr_replace($price_max, '', 0, 2);
    $betweenProducts = new Produtos();
    $betweenProducts->GetProdutosBetween($result_min, $result_max);
    $smarty->assign('PRODUTOS', $betweenProducts->GetItens());
}

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_REGISTER', Rotas::pag_Register());
$smarty->assign('PRODUTOS_INFO', Rotas::pag_Shopping_Detail());
$smarty->assign('PRODUTOS', $produtos->GetItens());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('SUB_CATEGORIAS', $sub_categorias->GetItens());
$smarty->assign('ITENS', $produtos->TotalDados());
$smarty->assign('GET_IMAGE', Rotas::get_ImagePasta());
$smarty->assign('MAIS_PRODUTOS', $listagem->GetItens());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('MARCAS', $marca->Getitens());
$smarty->assign('MIN', $min);
$smarty->assign('MAX', $max);

$smarty->display('shop.tpl');
