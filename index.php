<?php

require './lib/autoload.php';

    $smarty = new Template();
       
    //Valores chaves para o template
    $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
    $smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
    $smarty->assign('PAG_SHOP', Rotas::pag_Produtos());
    $smarty->assign('PAG_SHOPPING', Rotas::pag_Shopping());
    $smarty->assign('PAG_SHOPPING_DETAIL', Rotas::pag_Shopping_Detail());
    $smarty->assign('PAG_CONTACT', Rotas::pag_Contact());
    $smarty->assign('PAG_LOGIN', Rotas::pag_Login());
    $smarty->assign('PAG_REGISTER', Rotas::pag_Register());
    $smarty->assign('PAG_CHECK_OUT', Rotas::pag_Check_Out());
    $smarty->assign('PAG_FAQ', Rotas::pag_Faq());
    $smarty->assign('PRODUTOS_INFO', Rotas::pag_Shopping_Detail());

    $smarty->assign('TITULO_SITE', Config::SITE_NOME);
    
    
    $smarty->display('index.tpl');

?>