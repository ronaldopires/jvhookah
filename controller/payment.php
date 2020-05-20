<?php

if (isset($_SESSION['PRO']) and count($_SESSION['PRO']) > 0) {
    
    if(!isset($_SESSION['PED']['frete'])){
        // Rotas::Redirecionar(3, Rotas::pag_Shopping_Cart());
        echo '
            <div class="container" style="font-family: "Muli", sans-serif;">
            <div class="col-8 offset-2 text-center my-5">
            <h3 class="section-title">É necessário calcular o frete</h3>
            <p>Clique no botão para voltar a página anterior<p>
            <a href="carrinho" type="button" class="btn btn-outline-info">Voltar</a>
            </div>
            </div>
            ';
    exit();
    }

    $smarty = new Template();
    $carrinho = new Carrinho();
    $pedido = new Pedidos();
    

    $ref_ped_cod = date('ymdHms') . $_SESSION['CLI']['cli_id'];

    if(!isset($_SESSION['PED']['pedido']) && (!isset($_SESSION['PED']['ref']))){
        $_SESSION['PED']['pedido'] = $ref_ped_cod;
        $_SESSION['PED']['ref'] = $ref_ped_cod;
    }

    $cliente = $_SESSION['CLI']['cli_id'];
    $cod = $_SESSION['PED']['pedido'];
    $ref = $_SESSION['PED']['ref'];
    $frete = $_SESSION['PED']['frete'];
    

    $smarty->assign('PRO', $carrinho->GetCarrinho());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('PAG_SHOP', Rotas::pag_Produtos());
    $smarty->assign('PAG_HOME', Rotas::get_SiteHOME());

    $email = new EnviarEmail();

    $destinatarios = array(Config::EMAIL_USER, $_SESSION['CLI']['cli_email']);
    $assunto = ' Pedido da Loja Jv Hookah ' . Sistema::DataAtualBR();
    $msg = $smarty->fetch('payment.tpl');


    $email->Enviar($assunto, $msg, $destinatarios);
    
    
    /* $message = '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
    <h4>Erro ao finalizar o pedido<h4>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button></div>' . Rotas::Redirecionar(3, Rotas::pag_Produtos()); */
    //Se gravou o pedido limpa as sessões
    // $pedido->PedidoGravar($cliente, $cod, $ref, $frete) ? $pedido->LimparSessoes() : $message;

    
    $smarty->display('payment.tpl');
} else {
    echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
    <h4>Sem produtos no carrinho.<h4>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button></div>';
}
