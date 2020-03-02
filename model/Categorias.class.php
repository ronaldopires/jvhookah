<?php

class Categorias extends Conexao
{

    private $cate_id, $cate_nome, $cate_slug, $cate_img;

    public function __construct()
    {
        parent::__construct();
    }

    public function GetCategorias()
    {
        //Buscar itens por categoria
        $query = "SELECT * FROM {$this->prefix}categorias ";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }
    public function GetSubCategorias()
    {
        //Buscar itens por categoria
        $query = "SELECT * FROM {$this->prefix}sub_categorias s INNER JOIN {$this->prefix}categorias c ON s.cate_id = c.cate_id ";
        $this->ExecuteSQL($query);
        $this->GetListaSub();
    }

    //Lista dos itens encontrados
    private function GetLista()
    {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'cate_id' => $lista['cate_id'],
                'cate_nome' => $lista['cate_nome'],
                'cate_slug' => $lista['cate_slug'],
                'cate_img' => $lista['cate_img'],
                'cate_link' => Rotas::pag_Produtos() . '/' . $lista['cate_id'] . '/' . $lista['cate_slug'],
            );
            $i++;
        endwhile;
    }
    //Lista dos itens encontrados
    private function GetListaSub()
    {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'sub_id' => $lista['sub_id'],
                'cate_id' => $lista['cate_id'],
                'sub_nome' => $lista['sub_nome'],
                'sub_slug' => $lista['sub_slug'],
                'sub_img' => Rotas::ImageLink($lista['sub_img'], 1000, 1000),
                'sub_link' => Rotas::pag_Produtos(). '/'.$lista['cate_id'] . '/' . $lista['cate_slug'] . '/' . $lista['sub_id'] . '/' . $lista['sub_slug'],
            );
            $i++;
        endwhile;
    }
}
