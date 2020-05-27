<?php

$smarty = new Template();
$produtos = new Produtos();

if (isset($_POST['pro_id_favorito'])) {
    $id = $_POST['pro_id_favorito'];

    $produtos->Favoritos($id);
}
if (isset($_SESSION['PROF']) && !empty($_SESSION['PROF'])) {

    /* echo '<pre>';
    var_dump($_SESSION['PROF']);
    echo '</pre>'; */

    
    if(isset($_POST['removerFavorito'])){
        unset($_SESSION['PROF'][$_POST['pro_id']]);        
        Rotas::Redirecionar(0, Rotas::pag_Produtos_Favoritos());
    }



    $smarty->assign('FAVORITOS', $_SESSION['PROF']);
    $smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
    $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());


    $smarty->display('produtos_favoritos.tpl');
} else {
    echo '
    <div class="container" style="font-family: "Muli", sans-serif;">
    <div class="col-8 offset-2 text-center my-5">
    <span style="font-size:10em;"><i class="ti-heart-broken"></i></span>
    <h3 class="section-title">Você não tem produtos favoritos ainda.</h3>
    <p>Clique no botão para verificar nossos produtos.<p>
    <a href="produtos" type="button" class="btn btn-outline-info">Escolher produtos</a>
    </div>
    </div>
    ';
}
