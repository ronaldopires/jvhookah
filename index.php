<?php

require './lib/autoload.php';

    $smarty = new Template();
       
    //Valores chaves para o template
    $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
    $smarty->assign('PAG_HOME', Rotas::pag_Home());
    $smarty->assign('PAG_SHOP', Rotas::pag_Carrinho());
    $smarty->assign('PAG_CONTACT', Rotas::pag_Contato());
    $smarty->assign('TITULO_SITE', Config::SITE_NOME);
    
       

    $smarty->display('index.tpl');
?>