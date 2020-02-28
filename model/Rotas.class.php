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
    static function pag_Shopping(){
        return self::get_SiteHOME() . '/carrinho';
    }
    static function pag_Shopping_Detail(){
        return self::get_SiteHOME() . '/detalhes_produtos';
    }

    static function pag_Produtos(){
        return self::get_SiteHOME() . '/produtos';
    }
    static function pag_Contact(){
        return self::get_SiteHOME() . '/contato';
    }
    static function pag_Login(){
        return self::get_SiteHOME() . '/login';
    }
    static function pag_Register(){
        return self::get_SiteHOME() . '/register';
    }
    static function     pag_Check_Out(){
        return self::get_SiteHOME() . '/checkout';
    }
    static function pag_Faq(){
        return self::get_SiteHOME() . '/perguntas_frequentes';
    }
    //Rotas de imagens internamente
    static function get_ImagePasta(){
        return 'media/images/';
    }
    //Rotas de imagens para hospedagem
    static function get_ImageURL(){
        return self::get_SiteHOME() . '/' . self::get_ImagePasta();
    }
    //Rotas de imagens para redimencionar e chamar rota
    static function ImageLink($img, $largura, $altura){
        $imagem = self::get_ImageURL() . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
        return $imagem;
    }

    //Obter rotas de páginas
    public static function get_Pagina()
    {
        if (isset($_GET['pag'])) {
            $pagina = $_GET['pag'];
            //Transforma pag em um array separado por /
            self::$pag = explode('/', $pagina);

            //Concatena a pasta controller com o parametro recebido por get e contatena com .php
            //Verifica a url até o parametro 0 porém podendo usar demais parametros para tratar futuramente
            $pagina = 'controller/' . self::$pag[0] . '.php';
            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include 'erro.php';
            }
        }else{
            include 'home.php';
        }
    }
}
