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
        unset($_SESSION['pedido']);
    }
}
