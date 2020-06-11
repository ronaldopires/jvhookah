<?php

$smarty = new Template();

$produtos = new Produtos();

$produtos->getTotalPro();
$smarty->assign('PRODUTOS', $produtos->getItens());


$smarty->display('adm_produtos.tpl');