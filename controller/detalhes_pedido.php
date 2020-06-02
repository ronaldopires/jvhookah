<?php

$smarty = new Template();

if (Login::Logado()) {

    if (!isset($_POST['cod_pedido'])) {
        Rotas::redirecionar(0, Rotas::pagMeuPerfil());
        exit();
    } else {
        $itens = new Itens();
        $pedido = filter_var($_POST['cod_pedido'], FILTER_SANITIZE_STRING);
        $itens->getItensPedidos($pedido);

        $smarty->assign('ITENS', $itens->getItens());
        $smarty->assign('TOTAL', Sistema::moedaBr($itens->getTotal()));
        $smarty->assign('PAG_PERFIL', Rotas::pagMeuPerfil());
        $smarty->assign('PAG_HOME', Rotas::getSiteHome());

        $smarty->display('detalhes_pedido.tpl');
    }
} else {
    exit(Rotas::redirecionar(0, Rotas::pagLogin()));
}
