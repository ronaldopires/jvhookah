<?php

$log = new LogSystem();
$msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} efetuou logout do sistema.";
$log->getLogger($msg, "acesso");

$cliente = new Clientes();

isset($_SESSION['CLI']['cli_id']) ? $cliente->statusCliOff($_SESSION['CLI']['cli_id']) : $_SESSION['CLI']['cli_id'] = "";


Login::Logoff();