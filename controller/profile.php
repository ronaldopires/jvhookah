<?php

$smarty = new Template();

if (Login::Logado()) {

    $smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
    $smarty->display('profile.tpl');
} else {
    exit(Rotas::Redirecionar(0, Rotas::pag_Login()));
}