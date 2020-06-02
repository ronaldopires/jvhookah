<?php

if (Login::Logado()) {
    $smarty = new Template();
    $carrinho = new Carrinho();

    $smarty->assign('PRO', $carrinho->getCarrinho());
    $smarty->assign('TOTAL', Sistema::moedaBr($carrinho->getTotal()));
    $smarty->assign('PAG_PRODUTOS', Rotas::pagProdutos());
    $smarty->assign('PAG_PERFIL', Rotas::pagMeuPerfil());
    $smarty->assign('PAG_HOME', Rotas::getSiteHome());

    $smarty->display('email_compra.tpl');
}
