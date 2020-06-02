<?php

class Rotas
{

    public static $pag;
    private static $pasta_controller = 'controller'; //Pasta padrão de controllers
    private static $pasta_view = 'view'; //Pasta padrão de templates
    private static $pasta_adm = 'adm'; //Pasta padrão de templates

    //Pasta principal do site
    public static function getSiteHome()
    {
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }
    //Raiz do site
    public static function getSiteRaiz()
    {
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }
    //Obter caminho para os templates
    public static function get_SiteTEMA()
    {
        return self::getSiteHome() . '/' . self::$pasta_view;
    }
    //Obter caminho para controller
    public static function getPastaController()
    {
        return self::$pasta_controller;
    }
    //Obter caminho das páginas
    public static function pagCarrinho()
    {
        return self::getSiteHome() . 'carrinho';
    }
    public static function pagAlterarCarrinho()
    {
        return self::getSiteHome() . 'alterar_carrinho';
    }
    public static function pagDetalhesProduto()
    {
        return self::getSiteHome() . 'detalhes_produto';
    }
    public static function pagProdutos()
    {
        return self::getSiteHome() . 'produtos';
    }
    public static function pagContato()
    {
        return self::getSiteHome() . 'contato';
    }
    public static function pagLogin()
    {
        return self::getSiteHome() . 'login';
    }
    public static function pagLogout()
    {
        return self::getSiteHome() . 'logout';
    }
    public static function pagMeuPerfil()
    {
        return self::getSiteHome() . 'meu_perfil';
    }
    public static function pagDetalhesPedido()
    {
        return self::getSiteHome() . 'detalhes_pedido';
    }
    public static function pagCadastro()
    {
        return self::getSiteHome() . 'cadastro';
    }
    public static function pagFinalizarPedido()
    {
        return self::getSiteHome() . 'finalizar_pedido';
    }
    public static function pagPagamento()
    {
        return self::getSiteHome() . 'pagamento';
    }
    public static function pagPerguntasFrequentes()
    {
        return self::getSiteHome() . 'perguntas_frequentes';
    }
    public static function pagRecuperarSenha()
    {
        return self::getSiteHome() . 'recuperar_senha';
    }
    public static function pagNovaSenha()
    {
        return self::getSiteHome() . 'nova_senha';
    }
    public static function pagProdutosFavoritos()
    {
        return self::getSiteHome() . 'produtos_favoritos';
    }
    public static function pagBlog()
    {
        return self::getSiteHome() . 'blog';
    }

    // ROTAS ADM
    public static function getSiteAdm()
    {
        return self::getSiteHome() . '/' . self::$pasta_adm;
    }

    public static function pagProdutosAdm()
    {
        return self::getSiteAdm() . 'adm_produtos';
    }
    public static function pagAdicionarProdutosAdm()
    {
        return self::getSiteAdm() . 'adm_adicionar_produtos';
    }
    public static function pagEditarProdutosAdm()
    {
        return self::getSiteAdm() . 'adm_editar_produtos';
    }
    public static function pagDeletarProdutosAdm()
    {
        return self::getSiteAdm() . 'adm_deletar_produtos';
    }
    public static function pagImagensProdutosAdm()
    {
        return self::getSiteAdm() . 'adm_imagens_produtos';
    }
    public static function pagAdicionarCategoriasAdm()
    {
        return self::getSiteAdm() . 'adm_adicionar_categorias';
    }
    public static function pagClientesAdm()
    {
        return self::getSiteAdm() . 'adm_clientes';
    }
    public static function pagCategoriasAdm()
    {
        return self::getSiteAdm() . 'adm_categorias';
    }

    public static function pagError()
    {
        return 'erro.php';
    }
    //Rotas de imagens internamente
    public static function getImagePasta()
    {
        return 'media/images/produtos/';
    }
    public static function getImagePastaProfile()
    {
        return 'media/images/profile/';
    }
    //Rotas de imagens para hospedagem
    public static function getImageUrl()
    {
        return self::getSiteHome() . '/' . self::getImagePasta();
    }
    public static function getImageUrlProfile()
    {
        return self::getSiteHome() . '/' . self::getImagePastaProfile();
    }
    //Rotas de imagens para redimencionar e chamar rota
    public static function imageLink($img, $largura, $altura)
    {
        $imagem = self::getImageUrl() . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
        return $imagem;
    }
    //Rotas de imagens para redimencionar e chamar rota
    public static function imageLinkProfile($img, $largura, $altura)
    {
        $imagem = self::getImageUrlProfile() . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
        return $imagem;
    }
    //Rotas para redirecionar de página
    public static function redirecionar($tempo, $pagina)
    {
        $url = '<meta http-equiv="refresh" content="' . $tempo . '; url=' . $pagina . '">';
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
        } else {
            include 'home.php';
        }
    }
}
