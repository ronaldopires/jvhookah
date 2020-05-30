<?php

class Produtos extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function GetProdutos($id=null)
    {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        if(!$id == null){
            $pro = " WHERE pro_id = :id ";
        }else{
            $pro = "";
        }
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id {$pro} ORDER BY pro_id DESC ";
        
        $query .= $this->PaginacaoLink("pro_id", $this->prefix."produtos");
        
        $params = array(':id' =>(int)$id);
        
        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    public function OrderByProducts($opcao){
        $opcao = filter_var($opcao, FILTER_SANITIZE_NUMBER_INT);
        switch ($opcao){
            case 0:
                $order = " ORDER BY pro_id DESC ";
            break;
            case 1:
                $order = " ORDER BY pro_valor ASC ";
            break;
            case 2:
                $order = " ORDER BY pro_valor DESC ";
            break;
            case 3:
                $order = " ORDER BY pro_data_cad ASC ";
            break;
            case 4:
                $order = " ORDER BY pro_nome ASC ";
            break;
            case 5:
                $order = " ORDER BY pro_nome DESC ";
            break;
        }

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id {$order}";
        $params = array(':opcao' => (int)$opcao);

        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    public function GetTotalPro(){
        
        $query = "SELECT * FROM {$this->prefix}produtos p ";
        $this->ExecuteSQL($query);
        return $this->TotalDados();
    }

    public function GetCaractPro($id){
        
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}caracteristicas c ON p.pro_id = c.cts_pro_id";
        $query .= " WHERE pro_id = {$id}";
        $this->ExecuteSQL($query);
        $this->GetListaPRO();
    }

    public function GetProdutosCateID($id){

        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id";
        $query .= " AND pro_categoria = :id";
        
        $query .= $this->PaginacaoLink("pro_id", $this->prefix."produtos WHERE pro_categoria=" . (int)$id );
        
        
        $params = array(':id' =>(int)$id);

        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    public function GetProdutosSubCateID($id){

        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id";
        $query .= " AND pro_sub_categoria = :id";

        $query .= $this->PaginacaoLink("pro_id", $this->prefix."produtos WHERE pro_categoria=" . (int)$id );

        
        $params = array(':id' =>(int)$id);

        $this->ExecuteSQL($query, $params);
        $this->GetLista();
        
    }

    public function GetProdutosPriceMin()
    {
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query =  "SELECT MIN(pro_valor) FROM {$this->prefix}produtos";
        
        $this->ExecuteSQL($query);
        return $this->ListarDados($query);
        
    }

    public function GetProdutosPriceMax()
    {
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query =  "SELECT MAX(pro_valor) FROM {$this->prefix}produtos ";
        
        $this->ExecuteSQL($query);
        return $this->ListarDados($query);
        
    }

    public function GetProdutosBetween($min, $max)
    {
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query =  "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id"; 
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id";
        $query .= " AND pro_valor BETWEEN :min and :max ";
        $query .= $this->PaginacaoLink("pro_id", $this->prefix."produtos WHERE pro_valor BETWEEN {$min} AND {$max}");
        $params = array(':min' => (int)$min, ':max' => (int)$max);
        
        $this->ExecuteSQL($query, $params);
        $this->GetLista();
        
    }

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
                'pro_valor' => Sistema::MoedaBR($lista['pro_valor'] - $lista['pro_desconto']),
                'pro_valor_us' => $lista['pro_valor'],
                'pro_tamanho' => $lista['pro_tamanho'],
                'pro_largura' => $lista['pro_largura'],
                'pro_altura' => $lista['pro_altura'],
                'pro_comprimento' => $lista['pro_comprimento'],
                'pro_img_p' => Rotas::ImageLink($lista['pro_img'], 150, 150),
                'pro_img' => Rotas::ImageLink($lista['pro_img'], 500, 500),
                'pro_img_g' => Rotas::ImageLink($lista['pro_img'], 700, 700),
                'pro_img_gg' => Rotas::ImageLink($lista['pro_img'], 1200, 1200),
                'pro_slug' => $lista['pro_slug'],
                'pro_estoque' => $lista['pro_estoque'],
                'pro_modelo' => $lista['pro_modelo'],
                'pro_ref' => $lista['pro_ref'],
                'pro_fabricante' => $lista['pro_fabricante'],
                'pro_lancamento' => $lista['pro_lancamento'],
                'pro_frete_free' => $lista['pro_frete_free'],
                'pro_data_cad' => Sistema::Fdata($lista['pro_data_cad']),
                'pro_desconto' => $lista['pro_desconto'],
                'cate_nome' => $lista['cate_nome'],
                'cate_id' => $lista['cate_id'],
                'sub_id' => $lista['sub_id'],
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
                'pro_img_p' => Rotas::ImageLink($lista['pro_img'], 150, 150),
                'pro_img' => Rotas::ImageLink($lista['pro_img'], 500, 500),
                'pro_img_g' => Rotas::ImageLink($lista['pro_img'], 700, 700),
                'pro_img_gg' => Rotas::ImageLink($lista['pro_img'], 1200, 1200),
                'pro_slug' => $lista['pro_slug'],
                'pro_estoque' => $lista['pro_estoque'],
                'pro_modelo' => $lista['pro_modelo'],
                'pro_ref' => $lista['pro_ref'],
                'pro_fabricante' => $lista['pro_fabricante'],
                'pro_lancamento' => $lista['pro_lancamento'],
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

    //TESTE DE FAVORITO
    public function Favoritos($id) {

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id WHERE pro_id = :id ORDER BY pro_id DESC";
        
        $params = array(':id' =>(int)$id);

        $this->ExecuteSQL($query, $params);
        $this->GetLista();
        
        
        foreach($this->GetItens() as $prof){
            $ID              = $prof['pro_id'];
            $NOME            = $prof['pro_nome'];
            $DESC            = $prof['pro_desc'];
            $PESO            = $prof['pro_peso'];
            $COR             = $prof['pro_cor'];
            $VALOR           = $prof['pro_valor'];
            $VALOR_US        = $prof['pro_valor'];
            $TAMANHO         = $prof['pro_tamanho'];
            $LARGURA         = $prof['pro_largura'];
            $ALTURA          = $prof['pro_altura'];
            $COMPRIMENTO     = $prof['pro_comprimento'];
            $IMG             = $prof['pro_img'];
            $SLUG            = $prof['pro_slug'];
            $ESTOQUE         = $prof['pro_estoque'];
            $MODELO          = $prof['pro_modelo'];
            $REF             = $prof['pro_ref'];
            $FABRICANTE      = $prof['pro_fabricante'];
            $ATIVO           = $prof['pro_ativo'];
            $FRETE_FREE      = $prof['pro_frete_free'];
            $DATA_CAD        = $prof['pro_data_cad'];
            $DESCONTO        = $prof['pro_desconto'];
            $CATE_NOME       = $prof['cate_nome'];
            $CATE_ID         = $prof['cate_id'];
            $SUB_NOME        = $prof['sub_nome'];
            $DATA_FAVORITO   = Sistema::DataAtualBR() ." - ". Sistema::HoraAtual();
            $QTD_FAVORITOS   = 1;
        }
        
        if(!isset($_SESSION['PROF'][$ID]['ID'])){
        
            $_SESSION['PROF'][$ID]['ID']              = $ID;
            $_SESSION['PROF'][$ID]['NOME']            = $NOME;
            $_SESSION['PROF'][$ID]['DESC']            = $DESC;
            $_SESSION['PROF'][$ID]['PESO']            = $PESO;
            $_SESSION['PROF'][$ID]['COR']             = $COR;
            $_SESSION['PROF'][$ID]['VALOR']           = $VALOR;
            $_SESSION['PROF'][$ID]['VALOR_US']        = $VALOR_US;
            $_SESSION['PROF'][$ID]['TAMANHO']         = $TAMANHO;
            $_SESSION['PROF'][$ID]['LARGURA']         = $LARGURA;
            $_SESSION['PROF'][$ID]['ALTURA']          = $ALTURA;
            $_SESSION['PROF'][$ID]['COMPRIMENTO']     = $COMPRIMENTO;
            $_SESSION['PROF'][$ID]['IMG']             = $IMG;
            $_SESSION['PROF'][$ID]['SLUG']            = $SLUG;
            $_SESSION['PROF'][$ID]['ESTOQUE']         = $ESTOQUE;
            $_SESSION['PROF'][$ID]['MODELO']          = $MODELO;
            $_SESSION['PROF'][$ID]['REF']             = $REF;
            $_SESSION['PROF'][$ID]['FABRICANTE']      = $FABRICANTE;
            $_SESSION['PROF'][$ID]['ATIVO']           = $ATIVO;
            $_SESSION['PROF'][$ID]['FRETE_FREE']      = $FRETE_FREE;
            $_SESSION['PROF'][$ID]['DATA_CAD']        = $DATA_CAD;
            $_SESSION['PROF'][$ID]['DESCONTO']        = $DESCONTO;
            $_SESSION['PROF'][$ID]['CATE_NOME']       = $CATE_NOME;
            $_SESSION['PROF'][$ID]['CATE_ID']         = $CATE_ID;
            $_SESSION['PROF'][$ID]['SUB_NOME']        = $SUB_NOME;
            $_SESSION['PROF'][$ID]['DATA_FAVORITO']   = $DATA_FAVORITO;
            $_SESSION['PROF'][$ID]['QTD_FAVORITOS']   = $QTD_FAVORITOS++;

            Rotas::Redirecionar(0, Rotas::pag_Produtos_Favoritos());
        }else{
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Produto já favoritado<h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>';
            
        }
        
        
    }


    
}
