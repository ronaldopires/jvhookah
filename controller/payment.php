<?php

if (isset($_SESSION['PRO']) and count($_SESSION['PRO']) > 0) {
    
    if(!isset($_SESSION['pedido'])){
        $_SESSION['pedido'] = md5(uniqid(date('YmdHms')));
    }


    $smarty = new Template();
    $carrinho = new Carrinho();
    $pedido = new Pedidos();
    $cliente = 1;
    $cod = $_SESSION['pedido'];
    $ref = 123;
    

    $smarty->assign('PRO', $carrinho->GetCarrinho());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('PAG_SHOP', Rotas::pag_Produtos());
    $smarty->assign('PAG_HOME', Rotas::get_SiteHOME());

    $message = '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
    <h4>Erro ao finalizar o pedido<h4>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button></div>' . Rotas::Redirecionar(3, Rotas::pag_Payment());
    //Se gravou o pedido limpa as sessões
    $pedido->PedidoGravar($cliente, $cod, $ref) ? $pedido->LimparSessoes() : $message;

    $smarty->display('payment.tpl');
} else {
    echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
    <h4>Sem produtos no carrinho.<h4>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button></div>';
}
