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
        $query = "SELECT * FROM {$this->prefix}sub_categorias ";
        $this->ExecuteSQL($query);
        $this->GetLista();
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
}
