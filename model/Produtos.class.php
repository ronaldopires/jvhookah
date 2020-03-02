<?php

class Produtos extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function GetProdutos($id=null)
    {
        //Verifica se existe o ID
        if(!$id == null){
            //Caso exita ele ordena por id
            $pro = " WHERE pro_id = :id ";
        }else{
            $pro = "";
        }
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id {$pro} ORDER BY pro_id DESC";
        
        $params = array(':id' =>(int)$id);
        
        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    public function OrderByPriceASC(){
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id ORDER BY pro_valor DESC";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    public function GetCaractPro($id){
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}caracteristicas c ON p.pro_id = c.cts_pro_id";
        $query .= " WHERE pro_id = {$id}";
        $this->ExecuteSQL($query);
        $this->GetListaPRO();
    }

    public function GetProdutosCateID($id){

        //$id = filter_var(FILTER_SANITIZE_NUMBER_INT);

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id";
        $query .= " WHERE pro_categoria = :id";
        
        $params = array(':id' =>(int)$id);

        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    /* public function GetProdutosID($id)
    {
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query =  "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id ";
        //$query .= "JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_cate_id ";
        $query .= "WHERE pro_id = {$id}";
        $this->ExecuteSQL($query);
        $this->GetLista();
    } */
    //Retorna a lista de produtos
    private function GetLista()
    {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'pro_id' => $lista['pro_id'],
                'pro_nome' => $lista['pro_nome'],
                'pro_desc' => $lista['pro_desc'],
                'pro_peso' => $lista['pro_peso'],
                'pro_cor' => $lista['pro_cor'],
                'pro_valor' => Sistema::MoedaBR($lista['pro_valor']),
                'pro_valor_us' => $lista['pro_valor'],
                'pro_tamanho' => $lista['pro_tamanho'],
                'pro_largura' => $lista['pro_largura'],
                'pro_altura' => $lista['pro_altura'],
                'pro_comprimento' => $lista['pro_comprimento'],
                'pro_img' => Rotas::ImageLink($lista['pro_img'], 500, 500),
                'pro_img_p' => Rotas::ImageLink($lista['pro_img'], 150, 150),
                'pro_slug' => $lista['pro_slug'],
                'pro_estoque' => $lista['pro_estoque'],
                'pro_modelo' => $lista['pro_modelo'],
                'pro_ref' => $lista['pro_ref'],
                'pro_fabricante' => $lista['pro_fabricante'],
                'pro_ativo' => $lista['pro_ativo'],
                'pro_frete_free' => $lista['pro_frete_free'],
                'cate_nome' => $lista['cate_nome'],
                'cate_id' => $lista['cate_id'],
                'sub_nome' => $lista['sub_nome'],
            );
            $i++;
        endwhile;
    }
    private function GetListaPRO()
    {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'pro_id' => $lista['pro_id'],
                'pro_nome' => $lista['pro_nome'],
                'pro_desc' => $lista['pro_desc'],
                'pro_peso' => $lista['pro_peso'],
                'pro_cor' => $lista['pro_cor'],
                'pro_valor' => Sistema::MoedaBR($lista['pro_valor']),
                'pro_tamanho' => $lista['pro_tamanho'],
                'pro_largura' => $lista['pro_largura'],
                'pro_altura' => $lista['pro_altura'],
                'pro_comprimento' => $lista['pro_comprimento'],
                'pro_img' => Rotas::ImageLink($lista['pro_img'], 500, 500),
                'pro_slug' => $lista['pro_slug'],
                'pro_estoque' => $lista['pro_estoque'],
                'pro_modelo' => $lista['pro_modelo'],
                'pro_ref' => $lista['pro_ref'],
                'pro_fabricante' => $lista['pro_fabricante'],
                'pro_ativo' => $lista['pro_ativo'],
                'cts_id' => $lista['cts_id'],
                'cts_pro_id' => $lista['cts_pro_id'],
                'cts_material_tipo' => $lista['cts_material_tipo'],
                'cts_base_nome' => $lista['cts_base_nome'],
                'cts_material_base' => $lista['cts_material_base'],
                'cts_prato_nome' => $lista['cts_prato_nome'],
                'cts_material_queimador' => $lista['cts_material_queimador'],
                'cts_modelo_queimador' => $lista['cts_modelo_queimador'],
                'cts_tipo_queimador' => $lista['cts_tipo_queimador'],
                'cts_mangueira' => $lista['cts_mangueira'],
                'cts_material_mangueira' => $lista['cts_material_mangueira'],
                'cts_borracha_nome' => $lista['cts_borracha_nome'],
                'cts_material_borracha' => $lista['cts_material_borracha'],
                'cts_espessura_borranha' => $lista['cts_espessura_borranha'],
                'cts_tamanho_borracha' => $lista['cts_tamanho_borracha']
                
            );
            $i++;
        endwhile;
    }
    
}
