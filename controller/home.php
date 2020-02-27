<?php

//$produtos = new Produtos();
//$produtos->GetProdutos();

$smarty = new Template();
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

/* echo "<pre>";
var_dump($produtos->GetItens());
echo "</pre>"; */

$smarty->display('home.tpl');