<?php

if (isset($_SESSION['PRO']) and count($_SESSION['PRO']) > 0) {
    
    if(!isset($_POST['frete_radio'])){
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

    $smarty->assign('PRO', $carrinho->GetCarrinho());
   
    $_SESSION['PED']['frete'] = $_POST['frete_radio'];
    $_SESSION['PED']['total_com_frete'] = ($_POST['frete_radio'] + $carrinho->GetTotal());
    
    echo $_SESSION['PED']['frete'] . "<br>";
    echo $_SESSION['PED']['total_com_frete'];

    $smarty->assign('VALOR', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
    $smarty->assign('TOTAL', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));
    $smarty->assign('PAG_SHOP', Rotas::pag_Produtos());
    $smarty->assign('PAG_SHOPING_CART', Rotas::pag_Shopping_Cart());
    $smarty->assign('PAYMENT', Rotas::pag_Payment());
    $smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
    $smarty->display('check-out.tpl');
} else {
    echo 'Sem produtos';
}
