<?php

if(Login::Logado()){
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
        $smarty->assign('PAG_PROFILE', Rotas::pag_Profile());
        $smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
    
    
    $smarty->display('email-compra.tpl');
}