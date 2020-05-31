<?php

class Itens extends Conexao
{
    private $valor_total;

    public function __construct()
    {
        parent::__construct();
    }
    
    //Detalhes do Pedido
    function GetItensPedidos($pedido, $cliente=null){
        $query = "SELECT * FROM {$this->prefix}pedidos p, {$this->prefix}itens_pedido i, {$this->prefix}produtos d WHERE p.ped_cod = i.item_ped_cod AND i.item_produto = d.pro_id ";
        $query .= " AND p.ped_cod = :pedido";

        if ($cliente != null && $cliente > 0) {
            $query .= " AND p.ped_cliente = {:cliente}";
            $params[':cliente'] = (int) $cliente;
        }
        $params[':pedido'] = (int)$pedido;
        
        $this->executeSql($query, $params);
        $this->GetLista();
    }

    private function GetLista() {
        $i = 1;
        while($lista = $this->listarDados()):
            // subtotal de cada item
            $sub = $lista['item_valor'] * $lista['item_qtd'];
            $this->valor_total += $sub;

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
                'item_id' => $lista['item_id'],
                'item_nome' => $lista['pro_nome'],
                'item_valor' => Sistema::moedaBr($lista['item_valor']),
                'item_valor_us' => $lista['item_valor'],
                'item_qtd' => $lista['item_qtd'],
                'item_cor' => $lista['item_cor'],
                'item_img' => Rotas::imageLink($lista['pro_img'], 60, 60),
                'item_sub' => Sistema::moedaBr($sub),
                'item_sub_us' => $sub,
            );
            $i++;
        endwhile;
            
    }

    function GetTotal(){
        return $this->valor_total;
    }

    
}
