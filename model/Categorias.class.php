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

    public function getMarcas(){
        //Buscar itens por marca
        $query = "SELECT * FROM {$this->prefix}fabricantes ";
        $this->executeSql($query);
        $this->getListaMarcas();
    }
    public function getProdutosFab($id){

        // conta quantas opções tem
        if(count($id) == 1){
            // Caso seja somente uma ele executa essa query
            $query = "SELECT * FROM {$this->prefix}produtos p inner join {$this->prefix}categorias c on p.pro_categoria = c.cate_id join {$this->prefix}sub_categorias s on p.pro_sub_categoria = s.sub_id join {$this->prefix}fabricantes f ON p.pro_fabricantes = f.fab_id WHERE f.fab_id = ". $id[0];
            $query .= $this->paginacaoLink("fab_id", $this->prefix."fabricantes WHERE fab_id = " . $id[0]);
        
        }else{
            // Caso tenha mais de uma opção separo cada item do array com o parametro da query or f.fab_id = [$i]
            $resultado = implode(" or f.fab_id = ", $id);            
            $query = "SELECT * FROM {$this->prefix}produtos p inner join {$this->prefix}categorias c on p.pro_categoria = c.cate_id join {$this->prefix}sub_categorias s on p.pro_sub_categoria = s.sub_id join {$this->prefix}fabricantes f ON p.pro_fabricantes = f.fab_id WHERE f.fab_id = ". $resultado;
            //Para a pesquisa tem que ser sem o f.
            $pesquisa = implode(" or fab_id = ", $id);            
            $query .= $this->paginacaoLink("fab_id", $this->prefix."fabricantes WHERE fab_id =" . $pesquisa);
        }
        
        $this->executeSql($query);
        $this->getListaMarcasProducts();
    }

    private function getListaMarcas(){
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
    private function getListaMarcasProducts(){
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
                'pro_fabricantes' => $lista['pro_fabricantes'],
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
                'cate_link' => Rotas::pagProdutos() . '/' . $lista['cate_slug'],
                // 'cate_link' => Rotas::pagProdutos() . '\categoria/' . $lista['cate_id'] . '/' . $lista['cate_slug'],
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
