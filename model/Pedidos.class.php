<?php

class Pedidos extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }
    public function PedidoGravar($cliente, $cod, $ref, $freteValor = null, $freteTipo = null)
    {
        $retorno = FALSE;
        $query = "INSERT INTO {$this->prefix}pedidos (ped_data, ped_hora, ped_cliente, ped_cod, ped_ref, ped_frete_valor, ped_frete_tipo)";
        $query .= " VALUES (:data, :hora, :cliente, :cod, :ref, :frete_valor, :frete_tipo)";
        $params = array(
            ':data' => Sistema::DataAtualUS(),
            ':hora' => Sistema::HoraAtual(),
            ':cliente' => (int) $cliente,
            ':cod' => $cod,
            ':ref' => $ref,
            ':frete_valor' => $freteValor,
            ':frete_tipo' => $freteTipo,
        );
        $this->ExecuteSQL($query, $params);
        $this->ItensGravar($cod);
        $retorno = TRUE;
        return $retorno;
    }
    //Pedidos do CLiente
    function GetPedidosCliente($cliente=null){
        $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c ON p.ped_cliente = c.cli_id ";

        if(($cliente != null) AND ($cliente > 0)){
            $cli = (int)$cliente;
            $query .= " AND ped_cliente = {$cli} ORDER BY p.ped_data DESC";
        }

        $query .= $this->PaginacaoLink("ped_id", $this->prefix."pedidos WHERE ped_cliente=" . (int)$cliente );

        
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    private function GetLista() {
        $i = 1;
        while($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'ped_id' => $lista['ped_id'],
                'ped_data' => Sistema::Fdata($lista['ped_data']),
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
                'cli_sobrenome' => $lista['cli_sobrenome']
            );
            $i++;
        endwhile;
            
    }

    //Gravar Itens do Pedido
    function ItensGravar($codPedido){
        $carrinho = new Carrinho();
        foreach ($carrinho->GetCarrinho() as $item) {
            //Insere os itens do carrinho na tabela
            $query = "INSERT INTO {$this->prefix}itens_pedido (item_produto, item_valor, item_qtd, item_ped_cod)";
            $query.= " VALUES (:produto, :valor, :qtd, :cod)";
            $params = array(
                ':produto' => $item['pro_id'],
                ':valor' => $item['pro_valor_us'],
                ':qtd' => (int)$item['pro_qtd'],
                ':cod' => $codPedido,
            );
            $this->ExecuteSQL($query, $params);
        }
    }

    //Limpar Sessão
    function LimparSessoes(){
        unset($_SESSION['PRO']);
        unset($_SESSION['PED']['pedido']);
        unset($_SESSION['PED']['ref']);
    }
}
