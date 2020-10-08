<?php

$smarty = new Template();

$smarty->assign('PAG_HOME', Rotas::getSiteHome());



$smarty->display('trocas-e-devolucoes.tpl');