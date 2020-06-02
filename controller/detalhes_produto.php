<?php

use function PHPSTORM_META\type;

$smarty = new Template();

if ((isset(Rotas::$pag[1])) && (isset(Rotas::$pag[2]))) {

    $produtos = new Produtos();
    $listagem = new Produtos();
    $caract = new Produtos();
    $image = new ProdutoImages();
    $marca = new Categorias();
    $marca->GetMarcas();
    $sub_categorias = new Categorias();
    $sub_categorias->getSubCategorias();
    $image->getImagePro(Rotas::$pag[2]);
    $pro_relacionado = new Produtos();
    $id = filter_var(Rotas::$pag[2], FILTER_SANITIZE_NUMBER_INT);
    if ($produtos->getProdutosId($id)) {
        foreach ($produtos->getItens() as $dados) {
            $nome = $dados['pro_nome'];
        }
        if ($pro_relacionado->getProdutosIguaisId($nome)) {
            $smarty->assign('TOTAL_DADOS', $pro_relacionado->totalDados());
            $smarty->assign('CORES', $pro_relacionado->getItens());
            $smarty->assign('ID', Rotas::$pag[2]);

            /*  echo '<pre>';
        print_r($pro_relacionado->getItens());
        echo '</pre>';  */
        }

        $caract->getCaracteristicaPro($id);
        $listagem->getProdutos();

        $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
        $smarty->assign('PAG_HOME', Rotas::getSiteHome());
        $smarty->assign('PRODUTOS_INFO', $produtos->getItens());
        $smarty->assign('MAIS_PRODUTOS', $listagem->getItens());
        $smarty->assign('PAG_DETALHES_PRODUTO', Rotas::pagDetalhesProduto());
        $smarty->assign('PAG_ALTERAR_CARRINHO', Rotas::pagAlterarCarrinho());
        $smarty->assign('PRO_CARACTERISTICAS', $caract->getItens());
        $smarty->assign('IMAGENS', $image->getItens());
        $smarty->assign('PAG_PRODUTOS', Rotas::pagProdutos());
        $smarty->assign('SUB_CATEGORIAS', $sub_categorias->getItens());
        $smarty->assign('MARCAS', $marca->getItens());
        $smarty->assign('FAVORITOS', Rotas::pagProdutosFavoritos());

        $smarty->display('detalhes_produto.tpl');

    } else {
        echo '<div class="container text-center alert alert-dismissible fade show alert-warning" role="alert">
        <h4>Parametro de produto inválido.<h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button></div>' . Rotas::redirecionar(2, Rotas::pagProdutos());
        exit();
    }

} else {
    exit(Rotas::redirecionar(0, Rotas::pagProdutos()));
}
