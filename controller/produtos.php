<?php


$smarty = new Template();
$produtos = new Produtos();
$categorias = new Categorias();
$listagem = new Produtos();
$listagem->GetProdutos();
$marca = new Categorias();
$marca->GetMarcas();
$categorias->GetCategorias();
/* $caract = new Produtos();
$caract->GetCaractPro(); */
//Buscar produtos de uma categoria especifica
if(isset(Rotas::$pag[1])){
    $id = Rotas::$pag[1];
    $produtos->GetProdutosCateID($id);
}else{
    $produtos->GetProdutos();
}
$sub_categorias = new Categorias();
$sub_categorias->GetSubCategorias();

/* echo '<pre>';
var_dump($marca->Getitens());
echo '</pre>'; */

if(isset($_POST['opcoes'])){
    switch ($_POST['opcoes']){
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


$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_REGISTER', Rotas::pag_Register());
$smarty->assign('PRODUTOS', $produtos->GetItens());
$smarty->assign('PRODUTOS_INFO', Rotas::pag_Shopping_Detail());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('SUB_CATEGORIAS', $sub_categorias->GetItens());
$smarty->assign('ITENS', $produtos->TotalDados());
$smarty->assign('GET_IMAGE', Rotas::get_ImagePasta());
$smarty->assign('MAIS_PRODUTOS', $listagem->GetItens());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('MARCAS', $marca->Getitens());





$smarty->display('shop.tpl');