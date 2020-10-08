<?php

$smarty = new Template();

if ((isset(Rotas::$pag[1])) && (isset(Rotas::$pag[2]))) {

    /* Obtem as outras imagens do produto */
    $image = new ProdutoImages();
    $image->getImagePro(Rotas::$pag[2]);
    $smarty->assign('IMAGENS', $image->getItens());
    
    
    $id = filter_var(Rotas::$pag[2], FILTER_SANITIZE_NUMBER_INT);
    $produtos = new Produtos();
    if ($produtos->getProdutosId($id)) {
        
        /* Obter nome do produto para pesquisar produtos com nomes parecidos */
        foreach ($produtos->getItens() as $dados) {
            $nomeProduto = $dados['pro_nome'];
            $subCategoria = $dados['pro_sub_categoria'];
        }
        $pro_relacionado = new Produtos();
        if ($pro_relacionado->getProdutosIguaisId($nomeProduto)) {
            /* se exitir retorna o produto relacionado */
            $smarty->assign('PRODUTOS_RELACIONADO', $pro_relacionado->getItens());
        }

        /* verificar depois avaliação de produtos*/
        if(isset($_POST['stars']) && isset($_POST['coment_nome']) && isset($_POST['coment_email']) && isset($_POST['coment_msg'])){
        }

        /* Caracteristicas do Produto */
        $pro_caracteristica = new Produtos();
        $pro_caracteristica->getCaracteristicaPro($id);
        $smarty->assign('PRO_CARACTERISTICAS', $pro_caracteristica->getItens());
        
        
        /* Produtos de mesma categoria */
        $mais_produtos = new Produtos();
        $mais_produtos->getProdutosSubCateID($subCategoria);
        $smarty->assign('MAIS_PRODUTOS', $mais_produtos->getItens());


        $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
        $smarty->assign('PAG_HOME', Rotas::getSiteHome());
        $smarty->assign('DETALHES_PRODUTO', $produtos->getItens());
        $smarty->assign('PAG_DETALHES_PRODUTO', Rotas::pagDetalhesProduto());
        $smarty->assign('PAG_ALTERAR_CARRINHO', Rotas::pagAlterarCarrinho());
        $smarty->assign('PAG_PRODUTOS', Rotas::pagProdutos());
        $smarty->assign('FAVORITOS', Rotas::pagProdutosFavoritos());

        $smarty->display('detalhes-produto.tpl');

    } else {
        echo '<div class="container text-center alert alert-dismissible fade show alert-warning" role="alert">
        <h4>Produto não localizado<h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button></div>' . Rotas::redirecionar(2, Rotas::pagProdutos());
        exit();
    }

} else {
    exit(Rotas::redirecionar(0, Rotas::pagProdutos()));
}
