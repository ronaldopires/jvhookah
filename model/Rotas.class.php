<?php

class Rotas
{

    public static $pag;
    private static $pasta_controller = 'controller'; //Pasta padrão de controllers
    private static $pasta_view = 'view'; //Pasta padrão de templates

    //Pasta principal do site
    static function get_SiteHOME(){
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }
    //Raiz do site
    static function get_SiteRAIZ(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }
    //Obter caminho para os templates
    static function get_SiteTEMA(){
        return self::get_SiteHOME() . '/' . self::$pasta_view;
    }
    //Obter caminho das páginas
    static function pag_Carrinho(){
        return self::get_SiteHOME() . '/carrinho';
    }
    static function pag_Home(){
        return self::get_SiteHOME() . '/home';
    }
    static function pag_Contato(){
        return self::get_SiteHOME() . '/contato';
    }

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
