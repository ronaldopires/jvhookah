<?php

$smarty = new Template();

$smarty->assign('PAG_HOME', Rotas::getSiteHome());



$smarty->display('quem-somos.tpl');