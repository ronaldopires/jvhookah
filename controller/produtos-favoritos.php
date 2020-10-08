<?php

$smarty = new Template();
$produtos = new Produtos();

if (isset($_POST['pro_id_favorito'])) {
    $id = $_POST['pro_id_favorito'];

    $produtos->favoritos($id);
}
if (isset($_SESSION['FAVORITOS']) && !empty($_SESSION['FAVORITOS'])) {

    /* echo '<pre>';
    var_dump($_SESSION['FAVORITOS']);
    echo '</pre>'; */

    
    if(isset($_POST['removerFavorito'])){
        unset($_SESSION['FAVORITOS'][$_POST['pro_id']]);        
        Rotas::redirecionar(0, Rotas::pagProdutosFavoritos());
    }



    $smarty->assign('FAVORITOS', $_SESSION['FAVORITOS']);
    $smarty->assign('PAG_HOME', Rotas::getSiteHome());
    $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());


    $smarty->display('produtos-favoritos.tpl');
} else {
    echo '
    <div class="container" style="font-family: "Muli", sans-serif;">
    <div class="col-8 offset-2 text-center my-5">
    <span style="font-size:10em;"><i class="ti-heart-broken"></i></span>
    <h3 class="section-title">Você não tem produtos favoritos ainda.</h3>
    <p>Clique no botão para verificar nossos produtos.<p>
    <a href="produtos" type="button" class="site-btn-info">Escolher produtos</a>
    </div>
    </div>
    ';
}
