<?php

date_default_timezone_set('America/Sao_Paulo');

if (!isset($_SESSION)) {
    session_start();
}

require '../lib/autoload.php';

$smarty = new Template();

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

$smarty->display('adm_index.tpl');