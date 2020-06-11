<?php

date_default_timezone_set('America/Sao_Paulo');

if (!isset($_SESSION)) {
    session_start();
}

require './lib/autoload.php';

$smarty = new Template();
$produtos = new Produtos();
$categorias = new Categorias();
$log = new LogSystem();

$categorias->getSubCategorias();

/* echo '<pre>';
var_dump($_SESSION['CLI']);
echo '</pre>'; */

if (isset($_SESSION['CARRINHO']) and !empty($_SESSION['CARRINHO'])) {
    $total = 0;
    
    foreach ($_SESSION['CARRINHO'] as $lista) {
        $qtd = $lista['QTD'];
        $total = $total + $qtd;
    }
    $carrinho = new Carrinho();
    $smarty->assign('CARRINHO', $carrinho->getCarrinho());
    $smarty->assign('VALOR_TOTAL', Sistema::moedaBr($carrinho->getTotal()));
    $smarty->assign('ITENS_CARRINHO', $total);
    $smarty->assign('PAG_CARRINHO', Rotas::pagCarrinho());
} else {
    $smarty->assign('CARRINHO', false);
    $smarty->assign('VALOR_TOTAL', Sistema::moedaBr(0));
    $smarty->assign('ITENS_CARRINHO', 0);
}
if (Login::Logado()) {
    $smarty->assign('LOGADO', true);
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
    $smarty->assign('PAG_LOGOUT', Rotas::pagLogout());
    $smarty->assign('FOTO', $_SESSION['CLI']['cli_foto']);
} else {
    $smarty->assign('LOGADO', false);
    $smarty->assign('USER', '');
    $smarty->assign('PAG_LOGIN', Rotas::pagLogin());
}
if(isset($_SESSION['FAVORITOS'])){
    $total = 0;
    foreach($_SESSION['FAVORITOS'] as $lista){
        $qtd = $lista['QTD_FAVORITOS'];
        $total = $total + $qtd;
    }
    $smarty->assign('ITENS_FAVORITOS', $total);
}else{
    $smarty->assign('ITENS_FAVORITOS', 0);
}


if(isset($_SESSION['CLI'])){
    $tempo = (time() - $_SESSION['CLI']['cli_tempo_sessao']);
    
    if($tempo > $_SESSION['CLI']['cli_tempo_limite']){
        $msg = "Deslogado por inatividade {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']}";
        $log->getLogger($msg, "acesso");
        Rotas::redirecionar(0, Rotas::pagLogout());
    }else{
        $_SESSION['CLI']['cli_tempo_sessao'] = time();
    }
}

//Valores chaves para o template
$smarty->assign('PAG_HOME', Rotas::getSiteHome());
$smarty->assign('PAG_PRODUTOS', Rotas::pagProdutos());
$smarty->assign('PAG_CARRINHO', Rotas::pagCarrinho());
$smarty->assign('PAG_ALTERAR_CARRINHO', Rotas::pagAlterarCarrinho());
$smarty->assign('PAG_CONTATO', Rotas::pagContato());
$smarty->assign('PAG_CADASTRO', Rotas::pagCadastro());
$smarty->assign('PAG_FINALIZAR_PEDIDO', Rotas::pagFinalizarPedido());
$smarty->assign('PAG_PERGUNTAS_FREQUENTES', Rotas::pagPerguntasFrequentes());
$smarty->assign('PAG_LOGOUT', Rotas::pagLogout());
$smarty->assign('PAG_PERFIL', Rotas::pagMeuPerfil());
$smarty->assign('PAG_BLOG', Rotas::pagBlog());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('FAVORITOS', Rotas::pagProdutosFavoritos());
$smarty->assign('CATEGORIAS', $categorias->getItens());

$smarty->display('index.tpl');
