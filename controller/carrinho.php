<?php

if(isset($_SESSION['PRO'])){

    $smarty = new Template();
    $carrinho = new Carrinho();
    
    /* echo '<pre>';
    var_dump($carrinho->GetCarrinho());
    echo '</pre>'; */
    
    //unset($_SESSION['PRO']);
    
    $smarty->assign('PRO', $carrinho->GetCarrinho());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
    $smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
    $smarty->assign('PAG_SHOPPING_ALTER', Rotas::pag_Shopping_Alter());
    $smarty->assign('PAG_SHOP', Rotas::pag_Produtos());
    $smarty->assign('PAG_LOGIN', Rotas::pag_Login());
    $smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
    $smarty->assign('PRODUTOS_INFO', Rotas::pag_Shopping_Detail());
    
    




    $smarty->display('shopping-cart.tpl');    
}else {
        
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