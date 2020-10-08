<?php

date_default_timezone_set('America/Sao_Paulo');


    if (isset($_SESSION['CARRINHO']) and count($_SESSION['CARRINHO']) > 0) {

        if (!isset($_SESSION['PED']['frete_valor'])) {
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

        $ref_ped_cod = date('YmdHms') . rand(0,100);

        if (!isset($_SESSION['PED']['pedido']) && (!isset($_SESSION['PED']['ref']))) {
            $_SESSION['PED']['pedido'] = $ref_ped_cod;
            $_SESSION['PED']['ref'] = $ref_ped_cod;
        }

        $cliente = 3/* isset($_SESSION['CLI']['cli_id']) */;
        $cod = $_SESSION['PED']['pedido'];
        $ref = $_SESSION['PED']['ref'];
        $frete = $_SESSION['PED']['frete_valor'];

        if(isset($_SESSION['CUPOM'])){
            $desconto = $_SESSION['CUPOM']['cupom_desconto'];
            
            $valor_carrinho = $carrinho->getTotal();
            $porcento = ($valor_carrinho / 100) * $desconto;
            $total = $valor_carrinho - $porcento + $_SESSION['PED']['frete_valor'];
            $smarty->assign('TOTAL', Sistema::moedaBr($total));
            $smarty->assign('DESCONTO', Sistema::moedaBr($desconto));
            $_SESSION['PED']['frete_valor'] = $_POST['frete_radio'];
            $_SESSION['PED']['total_com_frete'] = ($_POST['frete_radio'] + $valor_carrinho);
            $cupom = $desconto;
        }else{
            $cupom = '';
        }

        $smarty->assign('CARRINHO', $_SESSION['CARRINHO']);
        $smarty->assign('PEDIDO', $_SESSION['PED']['pedido']);
        $smarty->assign('VALOR', Sistema::moedaBr($carrinho->getTotal()));
        $smarty->assign('FRETE', Sistema::moedaBr($_SESSION['PED']['frete_valor']));
        $smarty->assign('TOTAL', Sistema::moedaBr($_SESSION['PED']['total_com_frete']));
        $smarty->assign('PAG_PRODUTOS', Rotas::pagProdutos());
        $smarty->assign('PAG_CARRINHO', Rotas::pagCarrinho());
        $smarty->assign('PAG_PAGAMENTO', Rotas::pagPagamento());
        $smarty->assign('PAG_HOME', Rotas::getSiteHome());
        $smarty->assign('DESCONTO', false);
        $smarty->assign('PAG_PEDIDO_CONCLUIDO', Rotas::pagPedidoConcluido());
        $smarty->assign('PAG_PEDIDO_ERRO', Rotas::pagPedidoErro());
        $smarty->assign('REF', $ref);

        //Se gravou o pedido limpa as sessões
        if ($pedido->pedidoGravar($cliente, $cod, $ref, $frete, $cupom)) {
            
            //API pag seguro
            $pagSeguro = new PagamentoPS();
            $pagSeguro->pagamento($_SESSION['PED'], $carrinho->getCarrinho());

            $smarty->assign('PS_URL', $pagSeguro->psURL);
            $smarty->assign('PS_COD', $pagSeguro->psCod);
            $smarty->assign('PS_SCRIPT', $pagSeguro->psURL_Script);
            
            $email = new EnviarEmail();

            //Alterar email depois
            $destinatarios = array(Config::EMAIL_USER, 'ronaldo.carvalho@hotmail.com');
            $assunto = ' Pedido efetuado ' . Config::SITE_NOME . ' em ' . Sistema::dataAtualBr() . Sistema::horaAtual();
            $msg = $smarty->fetch('email-compra.tpl');

            $email->enviarEmail($assunto, $msg, $destinatarios);

            $pedido->limparSessoes();

            echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
            <h4>Pedido efetuado com sucesso em ' . Config::SITE_NOME . '<h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>' /* . Rotas::redirecionar(2, Rotas::pagMeuPerfil()) */;

        } else {
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Erro ao finalizar o pedido<h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>' /* . Rotas::redirecionar(2, Rotas::pagProdutos()) */;

        }

        $smarty->display('pagamento.tpl');
    } else {
        echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
        <h4>Sem produtos no carrinho.<h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button></div>';
    }