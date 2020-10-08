<?php

class Produtos extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getProdutos()
    {
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id ORDER BY pro_id DESC ";

        $query .= $this->paginacaoLink("pro_id", $this->prefix . "produtos");

        $this->executeSql($query);
        if ($this->totalDados() > 0) {
            $this->getLista();
            return true;
        } else {
            return false;
        }
    }

    public function getProdutosId($id)
    {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        //Query  especifica para buscar os produtos de uma categorias especificas
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id WHERE pro_id = :id ORDER BY pro_id DESC ";

        $query .= $this->paginacaoLink("pro_id", $this->prefix . "produtos");

        $params = array(':id' => (int) $id);

        $this->executeSql($query, $params);
        if ($this->totalDados() > 0) {
            $this->getLista();
            return true;
        } else {
            return false;
        }
    }

    //QUERY PARA RELACIONAR PRODUTOS IGUAIS DE CORES DIFERENTES
    public function getProdutosIguaisId($nome)
    {
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id WHERE pro_nome LIKE '%$nome%' ";
        $params = array(':nome' => $nome);

        $this->executeSql($query, $params);
        if ($this->totalDados() > 0) {
            $this->getLista();
            return true;
        } else {
            return false;
        }
    }
    public function ordenarPro($opcao)
    {
        $opcao = filter_var($opcao, FILTER_SANITIZE_NUMBER_INT);
        switch ($opcao) {
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
        $params = array(':opcao' => (int) $opcao);

        $this->executeSql($query, $params);
        $this->getLista();
    }

    public function pesquisarProduto($nome)
    {
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id WHERE pro_nome LIKE '%$nome%' ";

        $query .= $this->paginacaoLink("pro_id", $this->prefix . "produtos WHERE pro_nome LIKE '%$nome%'");
        $params = array(
            ':nome' => $nome
        );

        $this->executeSql($query, $params);
        if ($this->totalDados() > 0) {
            $this->getLista();
            return true;
        } else {
            return false;
        }
    }

    public function getTotalPro()
    {
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id ";
        $query .= " INNER JOIN {$this->prefix}fabricantes f ON p.pro_fabricantes = f.fab_id ";

        $this->executeSql($query);
        
        if($this->totalDados() > 0){
            $i = 1;
            while ($lista = $this->listarDados()):
                $this->itens[$i] = array(
                    'pro_id' => $lista['pro_id'],
                    'pro_nome' => $lista['pro_nome'],
                    'pro_desc' => $lista['pro_desc'],
                    'pro_peso' => $lista['pro_peso'],
                    'pro_cor' => $lista['pro_cor'],
                    'pro_valor' => Sistema::moedaBr($lista['pro_valor']),
                    'pro_tamanho' => $lista['pro_tamanho'],
                    'pro_largura' => $lista['pro_largura'],
                    'pro_altura' => $lista['pro_altura'],
                    'pro_comprimento' => $lista['pro_comprimento'],
                    'pro_img_p' => Rotas::imageLink($lista['pro_img'], 150, 150),
                    'pro_img' => Rotas::imageLink($lista['pro_img'], 400, 400),
                    'pro_img_g' => Rotas::imageLink($lista['pro_img'], 700, 700),
                    'pro_img_gg' => Rotas::imageLink($lista['pro_img'], 1200, 1200),
                    'pro_estoque' => $lista['pro_estoque'],
                    'pro_modelo' => $lista['pro_modelo'],
                    'pro_ref' => $lista['pro_ref'],
                    'pro_lancamento' => $lista['pro_lancamento'],
                    'pro_frete_free' => $lista['pro_frete_free'],
                    'pro_data_cad' => Sistema::formatarData($lista['pro_data_cad']),
                    'pro_desconto' => $lista['pro_desconto'],
                    'cate_nome' => $lista['cate_nome'],
                    'cate_slug' => $lista['cate_slug'],
                    'sub_nome' => $lista['sub_nome'],
                    'fab_nome' => $lista['fab_nome'],
                    'fab_slug' => $lista['fab_slug'],
                );
                $i++;
            endwhile;
            return true;
        }else{
            return false;
        }
    }

    public function getCaracteristicaPro($id)
    {

        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}caracteristicas c ON p.pro_id = c.cts_pro_id";
        $query .= " WHERE pro_id = {$id}";
        $this->executeSql($query);
        $this->getListaPRO();
    }

    public function getProdutosCateID($id)
    {

        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id";
        $query .= " AND pro_categoria = :id";

        $query .= $this->paginacaoLink("pro_id", $this->prefix . "produtos WHERE pro_categoria=" . (int) $id);

        $params = array(':id' => (int) $id);

        $this->executeSql($query, $params);
        $this->getLista();
    }

    public function getProdutosSlug($slug)
    {

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id";
        $query .= " AND cate_slug = :slug";

        $params = array(':slug' => $slug);

        $this->executeSql($query, $params);
        
        if($this->totalDados() > 0){
            $this->getLista();
            return true;
        }else{
            return false;
        }
    }
    public function getProdutosSubSlug($slug)
    {

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id";
        $query .= " AND sub_slug = :slug";
        
        $params = array(':slug' => $slug);

        $this->executeSql($query, $params);
        
        if($this->totalDados() > 0){
            $this->getLista();
            return true;
        }else{
            return false;
        }
    }

    public function getProdutosSubCateID($id)
    {

        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id";
        $query .= " AND pro_sub_categoria = :id";

        $query .= $this->paginacaoLink("pro_id", $this->prefix . "produtos WHERE pro_categoria=" . (int) $id);

        $params = array(':id' => (int) $id);

        $this->executeSql($query, $params);
        $this->getLista();

    }

    public function getProdutosPrecoMin()
    {
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query = "SELECT MIN(pro_valor) FROM {$this->prefix}produtos";

        $this->executeSql($query);
        return $this->listarDados($query);

    }

    public function getProdutosPrecoMax()
    {
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query = "SELECT MAX(pro_valor) FROM {$this->prefix}produtos ";

        $this->executeSql($query);
        return $this->listarDados($query);

    }

    public function getProdutosBetween($min, $max)
    {
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id";
        $query .= " AND pro_valor BETWEEN :min and :max ";
        $query .= $this->paginacaoLink("pro_id", $this->prefix . "produtos WHERE pro_valor BETWEEN {$min} AND {$max}");
        $params = array(':min' => (int) $min, ':max' => (int) $max);

        $this->executeSql($query, $params);
        $this->getLista();

    }

    public function ProdutosMaisvendidos()
    {
        $query = " SELECT  pro_id, pro_nome, pro_desc, pro_valor, pro_img, pro_slug, cate_nome, cate_slug, sub_id, sub_nome, item_produto, sum(item_qtd) AS vendas_totais FROM jv_itens_pedido i JOIN jv_produtos p ON p.pro_id = i.item_produto JOIN jv_categorias c ON p.pro_categoria = c.cate_id JOIN jv_sub_categorias s ON p.pro_sub_categoria = s.sub_id GROUP BY pro_id ORDER BY vendas_totais DESC LIMIT 4";
        $this->executeSql($query);
        if ($this->totalDados() > 0) {
            $i = 1;
            while ($lista = $this->listarDados()):
                $this->itens[$i] = array(
                    'pro_id' => $lista['pro_id'],
                    'pro_nome' => $lista['pro_nome'],
                    'pro_desc' => $lista['pro_desc'],
                    'pro_valor' => Sistema::moedaBr($lista['pro_valor']),
                    'pro_img_p' => Rotas::imageLink($lista['pro_img'], 150, 150),
                    'pro_img' => Rotas::imageLink($lista['pro_img'], 400, 400),
                    'pro_img_g' => Rotas::imageLink($lista['pro_img'], 700, 700),
                    'pro_img_gg' => Rotas::imageLink($lista['pro_img'], 1200, 1200),
                    'pro_slug' => $lista['pro_slug'],
                    'cate_nome' => $lista['cate_nome'],
                    'cate_slug' => $lista['cate_slug'],
                    'sub_id' => $lista['sub_id'],
                    'sub_nome' => $lista['sub_nome'],
                );
                $i++;
            endwhile;
            return true;
        } else {
            return false;
        }
    }

    public function produtosPromocoes()
    {
        //Query  especifica para buscar os produtos de uma categorias especificas
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id WHERE pro_desconto > 0 ORDER BY pro_id DESC ";

        $query .= $this->paginacaoLink("pro_id", $this->prefix . "produtos WHERE pro_desconto > 0");

        $this->executeSql($query);
        if ($this->totalDados() > 0) {
            $this->getLista();
            return true;
        } else {
            return false;
        }

    }

    private function getLista()
    {
        $i = 1;
        while ($lista = $this->listarDados()):
            $this->itens[$i] = array(
                'pro_id' => $lista['pro_id'],
                'pro_categoria' => $lista['pro_categoria'],
                'pro_sub_categoria' => $lista['pro_sub_categoria'],
                'pro_caracteristica' => $lista['pro_caracteristica'],
                'pro_fabricantes' => $lista['pro_fabricantes'],
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
                'pro_img' => Rotas::imageLink($lista['pro_img'], 400, 400),
                'pro_img_g' => Rotas::imageLink($lista['pro_img'], 700, 700),
                'pro_img_gg' => Rotas::imageLink($lista['pro_img'], 1200, 1200),
                'pro_slug' => $lista['pro_slug'],
                'pro_estoque' => $lista['pro_estoque'],
                'pro_modelo' => $lista['pro_modelo'],
                'pro_ref' => $lista['pro_ref'],
                'pro_lancamento' => $lista['pro_lancamento'],
                'pro_frete_free' => $lista['pro_frete_free'],
                'pro_data_cad' => Sistema::formatarData($lista['pro_data_cad']),
                'pro_desconto' => $lista['pro_desconto'],
                'cate_id' => $lista['cate_id'],
                'cate_nome' => $lista['cate_nome'],
                'cate_slug' => $lista['cate_slug'],
                'sub_id' => $lista['sub_id'],
                'sub_nome' => $lista['sub_nome'],
                'sub_slug' => $lista['sub_slug'],
            );
            $i++;
        endwhile;
    }
    private function getListaPRO()
    {
        $i = 1;
        while ($lista = $this->listarDados()):
            $this->itens[$i] = array(
                'pro_id' => $lista['pro_id'],
                'pro_nome' => $lista['pro_nome'],
                'pro_desc' => $lista['pro_desc'],
                'pro_peso' => $lista['pro_peso'],
                'pro_cor' => $lista['pro_cor'],
                'pro_valor' => Sistema::moedaBr($lista['pro_valor']),
                'pro_tamanho' => $lista['pro_tamanho'],
                'pro_largura' => $lista['pro_largura'],
                'pro_altura' => $lista['pro_altura'],
                'pro_comprimento' => $lista['pro_comprimento'],
                'pro_img_p' => Rotas::imageLink($lista['pro_img'], 150, 150),
                'pro_img' => Rotas::imageLink($lista['pro_img'], 400, 400),
                'pro_img_g' => Rotas::imageLink($lista['pro_img'], 700, 700),
                'pro_img_gg' => Rotas::imageLink($lista['pro_img'], 1200, 1200),
                'pro_slug' => $lista['pro_slug'],
                'pro_estoque' => $lista['pro_estoque'],
                'pro_modelo' => $lista['pro_modelo'],
                'pro_ref' => $lista['pro_ref'],
                'pro_fabricantes' => $lista['pro_fabricantes'],
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
                'cts_tamanho_borracha' => $lista['cts_tamanho_borracha'],

            );
            $i++;
        endwhile;
    }

    //ADICIONAR PRODUTO AOS FAVORITOS
    public function favoritos($id)
    {

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " INNER JOIN {$this->prefix}sub_categorias s ON p.pro_sub_categoria = s.sub_id WHERE pro_id = :id ORDER BY pro_id DESC";

        $params = array(':id' => (int) $id);

        $this->executeSql($query, $params);
        $this->getLista();

        foreach ($this->getItens() as $prof) {
            $ID = $prof['pro_id'];
            $NOME = $prof['pro_nome'];
            $DESC = $prof['pro_desc'];
            $PESO = $prof['pro_peso'];
            $COR = $prof['pro_cor'];
            $VALOR = $prof['pro_valor'];
            $VALOR_US = $prof['pro_valor'];
            $TAMANHO = $prof['pro_tamanho'];
            $LARGURA = $prof['pro_largura'];
            $ALTURA = $prof['pro_altura'];
            $COMPRIMENTO = $prof['pro_comprimento'];
            $IMG = $prof['pro_img'];
            $SLUG = $prof['pro_slug'];
            $ESTOQUE = $prof['pro_estoque'];
            $MODELO = $prof['pro_modelo'];
            $REF = $prof['pro_ref'];
            $FABRICANTE = $prof['pro_fabricantes'];
            $LANCAMENTO = $prof['pro_lancamento'];
            $FRETE_FREE = $prof['pro_frete_free'];
            $DATA_CAD = $prof['pro_data_cad'];
            $DESCONTO = $prof['pro_desconto'];
            $CATE_NOME = $prof['cate_nome'];
            $CATE_ID = $prof['cate_id'];
            $SUB_NOME = $prof['sub_nome'];
            $DATA_FAVORITO = Sistema::dataAtualBr() . " - " . Sistema::horaAtual();
            $QTD_FAVORITOS = 1;
        }

        if (!isset($_SESSION['FAVORITOS'][$ID]['ID'])) {

            $_SESSION['FAVORITOS'][$ID]['ID'] = $ID;
            $_SESSION['FAVORITOS'][$ID]['NOME'] = $NOME;
            $_SESSION['FAVORITOS'][$ID]['DESC'] = $DESC;
            $_SESSION['FAVORITOS'][$ID]['PESO'] = $PESO;
            $_SESSION['FAVORITOS'][$ID]['COR'] = $COR;
            $_SESSION['FAVORITOS'][$ID]['VALOR'] = $VALOR;
            $_SESSION['FAVORITOS'][$ID]['VALOR_US'] = $VALOR_US;
            $_SESSION['FAVORITOS'][$ID]['TAMANHO'] = $TAMANHO;
            $_SESSION['FAVORITOS'][$ID]['LARGURA'] = $LARGURA;
            $_SESSION['FAVORITOS'][$ID]['ALTURA'] = $ALTURA;
            $_SESSION['FAVORITOS'][$ID]['COMPRIMENTO'] = $COMPRIMENTO;
            $_SESSION['FAVORITOS'][$ID]['IMG'] = $IMG;
            $_SESSION['FAVORITOS'][$ID]['SLUG'] = $SLUG;
            $_SESSION['FAVORITOS'][$ID]['ESTOQUE'] = $ESTOQUE;
            $_SESSION['FAVORITOS'][$ID]['MODELO'] = $MODELO;
            $_SESSION['FAVORITOS'][$ID]['REF'] = $REF;
            $_SESSION['FAVORITOS'][$ID]['FABRICANTES'] = $FABRICANTE;
            $_SESSION['FAVORITOS'][$ID]['LANCAMENTO'] = $LANCAMENTO;
            $_SESSION['FAVORITOS'][$ID]['FRETE_FREE'] = $FRETE_FREE;
            $_SESSION['FAVORITOS'][$ID]['DATA_CAD'] = $DATA_CAD;
            $_SESSION['FAVORITOS'][$ID]['DESCONTO'] = $DESCONTO;
            $_SESSION['FAVORITOS'][$ID]['CATE_NOME'] = $CATE_NOME;
            $_SESSION['FAVORITOS'][$ID]['CATE_ID'] = $CATE_ID;
            $_SESSION['FAVORITOS'][$ID]['SUB_NOME'] = $SUB_NOME;
            $_SESSION['FAVORITOS'][$ID]['DATA_FAVORITO'] = $DATA_FAVORITO;
            $_SESSION['FAVORITOS'][$ID]['QTD_FAVORITOS'] = $QTD_FAVORITOS++;

            Rotas::redirecionar(0, Rotas::pagProdutosFavoritos());
        } else {
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Produto já favoritado<h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>';

        }

    }

}
