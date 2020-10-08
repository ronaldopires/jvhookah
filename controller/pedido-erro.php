<?php

$smarty = new Template();

$pag = new PagamentoPS();

$ref = Rotas::$pag[1];

$smarty->assign('REF', $ref);

$smarty->display('pedido-erro.tpl');