<?php

if (isset($_SESSION['PRO']) and count($_SESSION['PRO']) > 0) {
    
    $smarty = new Template();
    $carrinho = new Carrinho();

    $smarty->assign('PRO', $carrinho->GetCarrinho());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('PAG_SHOP', Rotas::pag_Produtos());
    $smarty->assign('PAYMENT', Rotas::pag_Payment());
    $smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
    $smarty->display('check-out.tpl');
} else {
    echo 'Sem produtos';
}
