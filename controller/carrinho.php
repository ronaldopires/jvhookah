<?php

if (isset($_SESSION['CARRINHO']) && count($_SESSION['CARRINHO']) > 0) {

    $smarty = new Template();
    $carrinho = new Carrinho();

    $smarty->assign('PRO', $carrinho->getCarrinho());
    $smarty->assign('TOTAL', Sistema::moedaBr($carrinho->getTotal()));
    $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
    $smarty->assign('PAG_HOME', Rotas::getSiteHome());
    $smarty->assign('PAG_ALTERAR_CARRINHO', Rotas::pagAlterarCarrinho());
    $smarty->assign('PAG_LOGIN', Rotas::pagLogin());
    $smarty->assign('PAG_PRODUTOS', Rotas::pagProdutos());
    $smarty->assign('PAG_FINALIZAR_PEDIDO', Rotas::pagFinalizarPedido());
    $smarty->assign('PAG_DETALHES_PRODUTO', Rotas::pagDetalhesProduto());
    $smarty->assign('LINK', $_SESSION['CARRINHO']);
    $smarty->assign('PESO', number_format($carrinho->getPeso(), 3, '.', ''));

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
    //Cupom do cliente
    if (isset($_POST['cupom_cliente'])) {

        //Verifica se o produto tem promoção
        foreach ($_SESSION['CARRINHO'] as $itens) {
            $desconto = $itens['DESCONTO'];
            if ($desconto != 0) {
                echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                    <h4>Cupom não disponível<h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>';
                unset($_SESSION['CUPOM']);
                Rotas::redirecionar(2, Rotas::pagCarrinho());
                exit();
            } else {

                $cupom = new Cupons();
                $cupom_cliente = $_POST['cupom_cliente'];
                if ($cupom->getCupomNome($cupom_cliente)) {
                    $cupom_tipo = $_SESSION['CUPOM']['cupom_tipo'];

                    switch ($cupom_tipo) {
                        case 1:
                            $valor = $_SESSION['CUPOM']['cupom_desconto'];
                            $smarty->assign('VALOR', $valor);
                            break;
                        case 2:
                            $valor = $_SESSION['CUPOM']['cupom_desconto'];
                            $smarty->assign('VALOR', $valor);
                            break;
                    }
                } else {
                    echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                            <h4>Cupom inválido<h4>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button></div>';
                }
            }
        }

    }
    if (isset($_SESSION['CUPOM'])) {
        foreach ($_SESSION['CARRINHO'] as $itens) {
            $desconto = $itens['DESCONTO'];
            if ($desconto > 0) {
                echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                <h4>Cupom não disponível<h4>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>';
                Rotas::redirecionar(2, Rotas::pagCarrinho());
                unset($_SESSION['CUPOM']);
                exit();
            } else {
                $valor = $_SESSION['CUPOM']['cupom_desconto'];
                $smarty->assign('VALOR', $valor);
                $smarty->assign('CUPOM', true);
                $smarty->assign('CUPOM_CLI', $_SESSION['CUPOM']['cupom_nome']);
            }
        }
    } else {
        $smarty->assign('CUPOM', false);
        $smarty->assign('CUPOM_CLI', );

    }
    if (isset($_POST['removerCupom'])) {
        unset($_SESSION['CUPOM']);
        Rotas::redirecionar(0, Rotas::pagCarrinho());
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
