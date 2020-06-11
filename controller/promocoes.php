<?php

$smarty = new Template();
$produtos = new Produtos();

$produtos->produtosPromocoes();

/* echo '<pre>';
print_r($produtos->getItens());
echo '</pre>'; */

$smarty->assign('PAG_HOME', Rotas::getSiteHome());
$smarty->assign('PRODUTOS', $produtos->getItens());
$smarty->assign('PAGINAS',  $produtos->mostrarPaginacao());
$smarty->assign('PAG_DETALHES_PRODUTO', Rotas::pagDetalhesProduto());
$smarty->assign('ITENS', $produtos->totalDados());





$smarty->display('promocoes.tpl');
