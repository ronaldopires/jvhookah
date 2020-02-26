<?php

require './lib/autoload.php';

    $smarty = new Template();
    Rotas::get_Pagina();    
    //Valores chaves para o template
    $smarty->assign('NOME', 'Ronaldo');
    
    $smarty->display('index.tpl');
?>