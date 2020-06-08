<?php

class Pedidos extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }
    public function pedidoGravar($cliente, $cod, $ref, $freteValor = null, $freteTipo = null, $cupom = null)
    {
        $retorno = false;
        $query = "INSERT INTO {$this->prefix}pedidos (ped_data, ped_hora, ped_cliente, ped_cod, ped_ref, ped_frete_valor, ped_frete_tipo, ped_cupom)";
        $query .= " VALUES (:data, :hora, :cliente, :cod, :ref, :frete_valor, :frete_tipo, :cupom)";
        $params = array(
            ':data' => Sistema::dataAtualUs(),
            ':hora' => Sistema::horaAtual(),
            ':cliente' => (int) $cliente,
            ':cod' => $cod,
            ':ref' => $ref,
            ':frete_valor' => $freteValor,
            ':frete_tipo' => $freteTipo,
            ':cupom' => $cupom,
        );
        $this->executeSql($query, $params);
        $this->gravarItensPedido($cod);
        $retorno = true;
        return $retorno;
    }
    //Pedidos do CLiente
    public function getPedidosCliente($cliente = null)
    {
        $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c ON p.ped_cliente = c.cli_id ";

        if (($cliente != null) and ($cliente > 0)) {
            $cli = (int) $cliente;
            $query .= " AND ped_cliente = {$cli} ORDER BY p.ped_data DESC";
        }else{
            $query .= " ORDER BY p.ped_data DESC";
        }

        $query .= $this->paginacaoLink("ped_id", $this->prefix . "pedidos WHERE ped_cliente=" . (int) $cliente);

        $this->executeSql($query);
        $this->getLista();
    }

    private function getLista()
    {
        $i = 1;
        while ($lista = $this->listarDados()):
            $this->itens[$i] = array(
                'ped_id' => $lista['ped_id'],
                'ped_data' => Sistema::formatarData($lista['ped_data']),
                'ped_data_us' => $lista['ped_data'],
                'ped_hora' => $lista['ped_hora'],
                'ped_cliente' => $lista['ped_cliente'],
                'ped_cod' => $lista['ped_cod'],
                'ped_ref' => $lista['ped_ref'],
                'ped_pag_status' => $lista['ped_pag_status'],
                'ped_pag_forma' => $lista['ped_pag_forma'],
                'ped_pag_tipo' => $lista['ped_pag_tipo'],
                'ped_pag_codigo' => $lista['ped_pag_codigo'],
                'ped_frete_valor' => $lista['ped_frete_valor'],
                'ped_frete_tipo' => $lista['ped_frete_tipo'],
                'cli_nome' => $lista['cli_nome'],
                'cli_sobrenome' => $lista['cli_sobrenome'],
                'cli_foto' => $lista['cli_foto'],
            );
            $i++;
        endwhile;

    }

    //Gravar Itens do Pedido
    public function gravarItensPedido($codPedido)
    {
        $carrinho = new Carrinho();
        foreach ($carrinho->getCarrinho() as $item) {
            //Insere os itens do carrinho na tabela
            $query = "INSERT INTO {$this->prefix}itens_pedido (item_produto, item_valor, item_qtd, item_estoque, item_cor, item_ped_cod)";
            $query .= " VALUES (:produto, :valor, :qtd, :estoque, :cor, :cod)";
            $params = array(
                ':produto' => (int) $item['pro_id'],
                ':valor' => $item['pro_valor_us'],
                ':qtd' => $item['pro_qtd'],
                ':estoque' => $item['pro_estoque'],
                ':cor' => $item['pro_cor'],
                ':cod' => $codPedido,
            );
            $this->executeSql($query, $params);
            $this->atualizarEstoque($item['pro_id'], $item['pro_estoque'], $item['pro_qtd']);
        }
    }

    //Atualizar Estoque
    public function atualizarEstoque($id, $estoque, $qtd)
    {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $atualizar_estoque = $estoque - $qtd;
        $novo_estoque = $atualizar_estoque;
        $query = " UPDATE {$this->prefix}produtos SET pro_estoque = :pro_estoque WHERE pro_id = :id ";

        $params = array(
            'id' => $id,
            'pro_estoque' => $novo_estoque,

        );

        $this->executeSql($query, $params);

    }

    //Pedidos feitos
    public function getPedidosRecente()
    {
        
        $query = "SELECT ped_data FROM {$this->prefix}pedidos WHERE month(ped_data) = 6";

        $this->executeSql($query);
        if($this->totalDados()> 0){
            $i = 1;
            while ($lista = $this->listarDados()):
                $this->itens[$i] = array(
                    'ped_data' => Sistema::formatarData($lista['ped_data']),
                );
                $i++;
            endwhile;
            
        }

    }

    //Clientes que mais comprou
    public function clientePedido()
    {
        $query = "SELECT ped_data, ped_hora, count(ped_cliente) as total, cli_nome, cli_sobrenome, cli_foto FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c ON p.ped_cliente = c.cli_id GROUP BY ped_cliente ORDER BY ped_cliente ASC";
        $this->executeSql($query);
        
        if($this->totalDados() > 0){
            $i = 1;
            while ($lista = $this->listarDados()):
                $this->itens[$i] = array(
                    'ped_data' => Sistema::formatarData($lista['ped_data']),
                    'ped_hora' => $lista['ped_hora'],
                    'total' => $lista['total'],
                    // 'ped_cliente' => $lista['ped_cliente'],
                    'cli_nome' => $lista['cli_nome'],
                    'cli_sobrenome' => $lista['cli_sobrenome'],
                    'cli_foto' => Rotas::imageLinkProfile($lista['cli_foto'], 75, 75),
                );
                $i++;
            endwhile;
        }
    }

    //Pedidos mes
    public function pedidoMes($mes)
    {
        $query = " SELECT * FROM {$this->prefix}pedidos WHERE month(ped_data) = '$mes'";
        $this->executeSql($query);
    }

    //Limpar Sessão
    public function limparSessoes()
    {
        unset($_SESSION['CARRINHO']);
        unset($_SESSION['PED']);
    }
}
