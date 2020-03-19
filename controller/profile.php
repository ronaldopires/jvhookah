<?php

$smarty = new Template();

if(Login::Logado()){

    $smarty->display('profile.tpl');
}else{
    exit(Rotas::Redirecionar(0, Rotas::pag_Login()));
}
