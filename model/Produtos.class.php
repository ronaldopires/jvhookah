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
            $teste = " WHERE pro_id = {$id} ";
        }else{
            $teste = "";
        }
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id {$teste} ORDER BY pro_id DESC";
        
        
        $this->ExecuteSQL($query);
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
                'pro_valor' => $lista['pro_valor'],
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
                'pro_frete_free' => $lista['pro_frete_free'],
                'cate_nome' => $lista['cate_nome'],
                'cate_id' => $lista['cate_id'],
                'sub_nome' => $lista['sub_nome'],
            );
            $i++;
        endwhile;
    }
    
}
