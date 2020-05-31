<?php

if(Login::Logado()){
    if (isset($_SESSION['CARRINHO']) and count($_SESSION['CARRINHO']) > 0) {
    
        if(!isset($_SESSION['PED']['frete'])){
            Rotas::redirecionar(3, Rotas::pagCarrinho());
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
        
        $smarty->assign('CARRINHO', $carrinho->GetCarrinho());
        $smarty->assign('TOTAL', Sistema::moedaBr($carrinho->GetTotal()));
        $smarty->assign('PAG_PRODUTOS', Rotas::pagProdutos());
        $smarty->assign('PAG_HOME', Rotas::getSiteHome());
    
        //Se gravou o pedido limpa as sessões
        if($pedido->PedidoGravar($cliente, $cod, $ref, $frete)){
            $email = new EnviarEmail();
        
            $destinatarios = array(Config::EMAIL_USER, 'ronaldo.carvalho@hotmail.com');
            $assunto = ' Pedido efetuado '. Config::SITE_NOME .' em ' . Sistema::dataAtualBr() . Sistema::horaAtual();
            $msg = $smarty->fetch('email_compra.tpl');
        
            $email->Enviar($assunto, $msg, $destinatarios);
            
            $pedido->LimparSessoes();
            
            echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
            <h4>Pedido efetuado com sucesso em '. Config::SITE_NOME .'<h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>' . Rotas::redirecionar(3, Rotas::pagMeuPerfil());

        }else{
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Erro ao finalizar o pedido<h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>' . Rotas::redirecionar(3, Rotas::pagProdutos());

        } 
        
        
        $smarty->display('pagamento.tpl');
    } else {
        echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
        <h4>Sem produtos no carrinho.<h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button></div>';
    }
}else{
    Rotas::redirecionar(0, Rotas::pagLogin());
}
