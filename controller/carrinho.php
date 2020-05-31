<?php

if (isset($_SESSION['CARRINHO']) && count($_SESSION['CARRINHO']) > 0) {

    $smarty = new Template();
    $carrinho = new Carrinho();

    $smarty->assign('PRO', $carrinho->GetCarrinho());
    $smarty->assign('TOTAL', Sistema::moedaBr($carrinho->GetTotal()));
    $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
    $smarty->assign('PAG_HOME', Rotas::getSiteHome());
    $smarty->assign('PAG_ALTERAR_CARRINHO', Rotas::pagAlterarCarrinho());
    $smarty->assign('PAG_LOGIN', Rotas::pagLogin());
    $smarty->assign('PAG_PRODUTOS', Rotas::pagProdutos());
    $smarty->assign('PAG_FINALIZAR_PEDIDO', Rotas::pagFinalizarPedido());
    $smarty->assign('PAG_DETALHES_PRODUTO', Rotas::pagDetalhesProduto());
    $smarty->assign('LINK', $_SESSION['CARRINHO']);
    $smarty->assign('PESO', number_format($carrinho->GetPeso(), 3, '.', ''));

    /* echo '<pre>';
    var_dump($_SESSION['CARRINHO']);
    echo '</pre>'; */
    
    //Caso esteja logado adicionar o cep no calculo
    if (Login::Logado()) {
        $smarty->assign('LOGADO', true);
        $smarty->assign('CEP', $_SESSION['CLI']['cli_cep']);
    } else {
        $smarty->assign('LOGADO', );
        $smarty->assign('CEP', );
    }

    $smarty->display('carrinho.tpl');
} else {

    echo '
    <div class="container" style="font-family: "Muli", sans-serif;">
    <div class="col-8 offset-2 text-center my-5">
    <span style="font-size:10em;"><i class="ti-shopping-cart"></i></span>
    <h3 class="section-title">Seu carrinho está vazio no momento.</h3>
    <p>Clique no botão para verificar nossos produtos.<p>
    <a href="produtos" type="button" class="btn btn-outline-info">Escolher produtos</a>
    </div>
    </div>
    ';
}
