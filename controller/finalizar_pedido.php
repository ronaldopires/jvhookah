<?php

if (isset($_SESSION['CARRINHO']) && count($_SESSION['CARRINHO']) > 0) {
    
    if (!isset($_POST['frete_radio'])) {

        echo '
            <div class="container" style="font-family: "Muli", sans-serif;">
            <div class="col-8 offset-2 text-center my-5">
            <h3 class="section-title">É necessário calcular o frete</h3>
            <p>Clique no botão para voltar a página anterior<p>
            <a href="carrinho" type="button" class="btn btn-outline-info">Voltar</a>
            </div>
            </div>
            ' . Rotas::redirecionar(3, Rotas::pagCarrinho());
        exit();
    }

    $smarty = new Template();
    $carrinho = new Carrinho();

    $smarty->assign('PRO', $carrinho->GetCarrinho());

    $_SESSION['PED']['frete'] = $_POST['frete_radio'];
    $_SESSION['PED']['total_com_frete'] = ($_POST['frete_radio'] + $carrinho->GetTotal());

    $smarty->assign('VALOR', Sistema::moedaBr($carrinho->GetTotal()));
    $smarty->assign('FRETE', Sistema::moedaBr($_SESSION['PED']['frete']));
    $smarty->assign('TOTAL', Sistema::moedaBr($_SESSION['PED']['total_com_frete']));
    $smarty->assign('PAG_PRODUTOS', Rotas::pagProdutos());
    $smarty->assign('PAG_CARRINHO', Rotas::pagCarrinho());
    $smarty->assign('PAG_PAGAMENTO', Rotas::pagPagamento());
    $smarty->assign('PAG_HOME', Rotas::getSiteHome());
    $smarty->display('finalizar_pedido.tpl');
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
    ' . Rotas::redirecionar(3, Rotas::pagProdutos());
}