<?php

date_default_timezone_set('America/Sao_Paulo');

if (!isset($_SESSION)) {
    session_start();
}

require './lib/autoload.php';

$smarty = new Template();
$produtos = new Produtos();
$categorias = new Categorias();

$categorias->GetSubCategorias();

/* echo '<pre>';
var_dump($categorias->GetItens());
echo '</pre>'; */

if (isset($_SESSION['PRO']) and !empty($_SESSION['PRO'])) {
    $total = 0;
    
    foreach ($_SESSION['PRO'] as $lista) {
        $qtd = $lista['QTD'];
        $total = $total + $qtd;
    }
    $carrinho = new Carrinho();
    $smarty->assign('CARRINHO', $carrinho->GetCarrinho());
    $smarty->assign('VALOR_TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('ITENS_CARRINHO', $total);
    $smarty->assign('PAG_SHOPPING_ALTER', Rotas::pag_Shopping_Alter());
} else {
    $smarty->assign('CARRINHO', false);
    $smarty->assign('VALOR_TOTAL', Sistema::MoedaBR(0));
    $smarty->assign('ITENS_CARRINHO', 0);
}
if (Login::Logado()) {
    $smarty->assign('LOGADO', true);
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
    $smarty->assign('PAG_LOGOUT', Rotas::pag_Logout());
    $smarty->assign('FOTO', $_SESSION['CLI']['cli_foto']);
} else {
    $smarty->assign('LOGADO', false);
    $smarty->assign('USER', '');
    $smarty->assign('PAG_LOGIN', Rotas::pag_Login());
}
if(isset($_SESSION['PROF'])){
    $total = 0;
    foreach($_SESSION['PROF'] as $lista){
        $qtd = $lista['QTD_FAVORITOS'];
        $total = $total + $qtd;
    }
    $smarty->assign('ITENS_FAVORITOS', $total);
}else{
    $smarty->assign('ITENS_FAVORITOS', 0);
}

//Valores chaves para o template
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_SHOP', Rotas::pag_Produtos());
$smarty->assign('PAG_SHOPPING_CART', Rotas::pag_Shopping_Cart());
$smarty->assign('PAG_SHOPPING_DETAIL', Rotas::pag_Shopping_Detail());
$smarty->assign('PAG_CONTACT', Rotas::pag_Contact());
$smarty->assign('FAVORITOS', Rotas::pag_Produtos_Favoritos());
$smarty->assign('PAG_REGISTER', Rotas::pag_Register());
$smarty->assign('PAG_CHECK_OUT', Rotas::pag_Check_Out());
$smarty->assign('PAG_FAQ', Rotas::pag_Faq());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('PAG_LOGOUT', Rotas::pag_Logout());
$smarty->assign('PAG_PROFILE', Rotas::pag_Profile());
$smarty->assign('CATEGORIAS', $categorias->GetItens());

$smarty->display('index.tpl');