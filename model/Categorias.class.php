<?php

class Categorias extends Conexao
{

    // private $cate_id, $cate_nome, $cate_slug, $cate_img;

    public function __construct()
    {
        parent::__construct();
    }

    public function getCategorias()
    {
        //Buscar itens por categoria
        $query = "SELECT * FROM {$this->prefix}categorias ";
        $this->executeSql($query);
        $this->GetLista();
    }
    public function getSubCategorias()
    {
        //Buscar itens por categoria
        $query = "SELECT * FROM {$this->prefix}sub_categorias s INNER JOIN {$this->prefix}categorias c ON s.cate_id = c.cate_id ";
        $this->executeSql($query);
        $this->GetListaSub();
    }

    public function GetMarcas(){
        //Buscar itens por marca
        $query = "SELECT * FROM {$this->prefix}fabricantes ";
        $this->executeSql($query);
        $this->GetListaMarcas();
    }
    public function GetMarcasProducts($id){
        //Buscar itens por marca
        $query = " SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id INNER JOIN {$this->prefix}fabricantes f ON p.pro_fabricantes = f.fab_id AND pro_fabricantes = " . $id;
        $query .= $this->paginacaoLink("pro_fabricantes", $this->prefix."produtos WHERE pro_fabricantes = " . $id);
        // echo $query . "<br>";
        $params = array(':id' => (int)$id);

        $this->executeSql($query, $params);
        $this->GetListaMarcasProducts();
    }

    private function GetListaMarcas(){
        $i = 1;
        while ($lista = $this->listarDados()):
            $this->itens[$i] = array(
                'fab_id' => $lista['fab_id'],
                'fab_nome' => $lista['fab_nome'],
                'fab_slug' => $lista['fab_slug'],
                'fab_link' => Rotas::pagProdutos() . '/' . $lista['fab_id'] . '/' .  $lista['fab_slug']
            );
            $i++;
        endwhile;
    }
    private function GetListaMarcasProducts(){
        $i = 1;
        while ($lista = $this->listarDados()):
            $this->itens[$i] = array(
                'fab_id' => $lista['fab_id'],
                'fab_nome' => $lista['fab_nome'],
                'fab_slug' => $lista['fab_slug'],
                'fab_link' => Rotas::pagProdutos() . '/' . $lista['fab_id'] . '/' .  $lista['fab_slug'],
                'pro_id' => $lista['pro_id'],
                'pro_nome' => $lista['pro_nome'],
                'pro_desc' => $lista['pro_desc'],
                'pro_peso' => $lista['pro_peso'],
                'pro_cor' => $lista['pro_cor'],
                'pro_valor' => Sistema::moedaBr($lista['pro_valor']),
                'pro_valor_us' => $lista['pro_valor'],
                'pro_tamanho' => $lista['pro_tamanho'],
                'pro_largura' => $lista['pro_largura'],
                'pro_altura' => $lista['pro_altura'],
                'pro_comprimento' => $lista['pro_comprimento'],
                'pro_img_p' => Rotas::imageLink($lista['pro_img'], 150, 150),
                'pro_img' => Rotas::imageLink($lista['pro_img'], 500, 500),
                'pro_img_g' => Rotas::imageLink($lista['pro_img'], 700, 700),
                'pro_img_gg' => Rotas::imageLink($lista['pro_img'], 1200, 1200),
                'pro_slug' => $lista['pro_slug'],
                'pro_estoque' => $lista['pro_estoque'],
                'pro_modelo' => $lista['pro_modelo'],
                'pro_ref' => $lista['pro_ref'],
                'pro_fabricante' => $lista['pro_fabricante'],
                'pro_lancamento' => $lista['pro_lancamento'],
                'pro_frete_free' => $lista['pro_frete_free'],
                'pro_data_cad' => $lista['pro_data_cad'],
                'pro_desconto' => $lista['pro_desconto'],
                'cate_nome' => $lista['cate_nome'],
                'cate_id' => $lista['cate_id'],
                'sub_id' => $lista['sub_id'],
                'sub_nome' => $lista['sub_nome'],
                'sub_slug' => $lista['sub_slug']
            );
            $i++;
        endwhile;
        
    }

    //Lista dos itens encontrados
    private function GetLista()
    {
        $i = 1;
        while ($lista = $this->listarDados()):
            $this->itens[$i] = array(
                'cate_id' => $lista['cate_id'],
                'cate_nome' => $lista['cate_nome'],
                'cate_slug' => $lista['cate_slug'],
                'cate_img' => $lista['cate_img'],
                'cate_link' => Rotas::pagProdutos() . '\categoria/' . $lista['cate_id'] . '/' . $lista['cate_slug'],
            );
            $i++;
        endwhile;
    }
    //Lista dos itens encontrados
    private function GetListaSub()
    {
        $i = 1;
        while ($lista = $this->listarDados()):
            $this->itens[$i] = array(
                'sub_id' => $lista['sub_id'],
                'cate_id' => $lista['cate_id'],
                'cate_nome' => $lista['cate_nome'],
                'sub_nome' => $lista['sub_nome'],
                'sub_slug' => $lista['sub_slug'],
                'sub_img' => Rotas::imageLink($lista['sub_img'], 1000, 1000),
                'sub_link' => Rotas::pagProdutos(). '\sub_categoria/'.$lista['cate_id'] . '/' . $lista['cate_slug'] . '/' . $lista['sub_id'] . '/' . $lista['sub_slug'],
            );
            $i++;
        endwhile;
    }
}
