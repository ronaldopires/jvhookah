<?php

$smarty = new Template();

$smarty->assign('PAG_HOME', Rotas::getSiteHome());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());



$smarty->display('blog.tpl');