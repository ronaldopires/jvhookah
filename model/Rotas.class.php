<?php

class Rotas
{

    public static $pag;

    //Obter rotas de páginas
    public static function get_Pagina()
    {
        if (isset($_GET['pag'])) {
            $pagina = $_GET['pag'];
            //Transforma pag em um array separado por /
            self::$pag = explode('/', $pagina);

            //Concatena a pasta controller com o parametro recebido por get e contatena com .php
            //$pagina = 'controller/'. $_GET['pag'] . '.php';
            //Verifica a url até o parametro 0 porém podendo usar demais parametros para tratar futuramente
            $pagina = 'controller/' . self::$pag[0] . '.php';
            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include 'erro.php';
            }
        }
    }
}
