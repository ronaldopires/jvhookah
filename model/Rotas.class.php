<?php

class Rotas
{

    public static $pag;
    private static $pasta_controller = 'controller'; //Pasta padrão de controllers
    private static $pasta_view = 'view'; //Pasta padrão de templates
    private static $pasta_adm = 'adm'; //Pasta padrão de templates

    //Pasta principal do site
    static function getSiteHome(){
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }
    //Raiz do site
    static function getSiteRaiz(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }
    //Obter caminho para os templates
    static function get_SiteTEMA(){
        return self::getSiteHome() . '/' . self::$pasta_view;
    }
    //Obter caminho para controller
    static function getPastaController(){
        return self::$pasta_controller;
    }
    //Obter caminho das páginas
    static function pagCarrinho(){
        return self::getSiteHome() . 'carrinho';
    }
    static function pagAlterarCarrinho(){
        return self::getSiteHome() . 'alterar_carrinho';
    }
    static function pagDetalhesProduto(){
        return self::getSiteHome() . 'detalhes_produto';
    }
    static function pagProdutos(){
        return self::getSiteHome() . 'produtos';
    }
    static function pagContato(){
        return self::getSiteHome() . 'contato';
    }
    static function pagLogin(){
        return self::getSiteHome() . 'login';
    }
    static function pagLogout(){
        return self::getSiteHome() . 'logout';
    }
    static function pagMeuPerfil(){
        return self::getSiteHome() . 'meu_perfil';
    }
    static function pagDetalhesPedido(){
        return self::getSiteHome() . 'detalhes_pedido';
    }
    static function pagCadastro(){
        return self::getSiteHome() . 'cadastro';
    }
    static function pagFinalizarPedido(){
        return self::getSiteHome() . 'finalizar_pedido';
    }
    static function pagPagamento(){
        return self::getSiteHome() . 'pagamento';
    }
    static function pagPerguntasFrequentes(){
        return self::getSiteHome() . 'perguntas_frequentes';
    }
    static function pagRecuperarSenha(){
        return self::getSiteHome() . 'recuperar_senha';
    }
    static function pagNovaSenha(){
        return self::getSiteHome() . 'nova_senha';
    }
    static function pagProdutosFavoritos(){
        return self::getSiteHome() . 'produtos_favoritos';
    }
    static function pagBlog(){
        return self::getSiteHome() . 'blog';
    }

    // ROTAS ADM
    static function getSiteAdm(){
        return self::getSiteHome() . '/' . self::$pasta_adm;
    }

    static function pagProdutosAdm(){
        return self::getSiteAdm() . 'adm_produtos';
    }
    static function pagAdicionarProdutosAdm(){
        return self::getSiteAdm() . 'adm_adicionar_produtos';
    }
    static function pagEditarProdutosAdm(){
        return self::getSiteAdm() . 'adm_editar_produtos';
    }
    static function pagDeletarProdutosAdm(){
        return self::getSiteAdm() . 'adm_deletar_produtos';
    }
    static function pagImagensProdutosAdm(){
        return self::getSiteAdm() . 'adm_imagens_produtos';
    }
    static function pagAdicionarCategoriasAdm(){
        return self::getSiteAdm() . 'adm_adicionar_categorias';
    }
    static function pagClientesAdm(){
        return self::getSiteAdm() . 'adm_clientes';
    }
    static function pagCategoriasAdm(){
        return self::getSiteAdm() . 'adm_categorias';
    }
    



    static function pagError(){
        return 'erro.php';
    }
    //Rotas de imagens internamente
    static function getImagePasta(){
        return 'media/images/produtos/';
    }
    static function getImagePastaProfile(){
        return 'media/images/profile/';
    }
    //Rotas de imagens para hospedagem
    static function getImageUrl(){
        return self::getSiteHome() . '/' . self::getImagePasta();
    }
    static function getImageUrlProfile(){
        return self::getSiteHome() . '/' . self::getImagePastaProfile();
    }
    //Rotas de imagens para redimencionar e chamar rota
    static function imageLink($img, $largura, $altura){
        $imagem = self::getImageUrl() . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
        return $imagem;
    }
    //Rotas de imagens para redimencionar e chamar rota
    static function imageLinkProfile($img, $largura, $altura){
        $imagem = self::getImageUrlProfile() . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
        return $imagem;
    }
    //Rotas para redirecionar de página
    static function redirecionar($tempo, $pagina){
        $url = '<meta http-equiv="refresh" content="'. $tempo .'; url='. $pagina .'">';
        echo $url;
    }

    //Obter rotas de páginas
    public static function getPagina()
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
