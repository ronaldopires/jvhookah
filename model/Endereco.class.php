<?php

class Endereco extends Conexao {
    public function __construct()
    {
        parent::__construct();
    }
    public function GravarEndereco($cep, $endereco, $bairro, $cidade, $uf, $numero, $complemento, $id){
        $query = "INSERT INTO {$this->prefix}enderecos (endereco_cli_cep, endereco_cli_endereco, endereco_cli_bairro, endereco_cli_cidade, endereco_cli_uf, endereco_cli_numero, endereco_cli_complemento, endereco_cli_id) ";
        $query .= " VALUES (:cep, :endereco, :bairro, :cidade, :uf, :numero, :complemento, :id)";
        
        $params = array(
            ':cep' => $cep,
            ':endereco' => $endereco,
            ':bairro' => $bairro,
            ':cidade' => $cidade,
            ':uf' => $uf,
            ':numero' => $numero,
            ':complemento' => $complemento,
            ':id' => (int)$id
            
        );
        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
        
    }
    //Consultar Endereços
    public function EnderecoCliente($id){
        $query = "SELECT * FROM {$this->prefix}enderecos e INNER JOIN {$this->prefix}clientes c ON e.endereco_cli_id = c.cli_id";
        $query .= " WHERE cli_id = {$id}";

        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    //Obter itens da consulta
    private function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'endereco_id' => $lista['endereco_id'], 
                'endereco_cli_cep' => $lista['endereco_cli_cep'], 
                'endereco_cli_endereco' => $lista['endereco_cli_endereco'], 
                'endereco_cli_bairro' => $lista['endereco_cli_bairro'], 
                'endereco_cli_cidade' => $lista['endereco_cli_cidade'], 
                'endereco_cli_uf' => $lista['endereco_cli_uf'], 
                'endereco_cli_numero' => $lista['endereco_cli_numero'], 
                'endereco_cli_complemento' => $lista['endereco_cli_complemento'] 
            );
            $i++;
        endwhile;
    }

    //Atualizar Endereço
    public function AtualizarEndereco($cep, $endereco, $bairro, $cidade, $uf, $numero, $complemento, $id){
        $query = "UPDATE {$this->prefix}enderecos SET endereco_cli_cep = {$cep}, endereco_cli_endereco = {$endereco} ";
        $query .= " WHERE endereco_cli_id = {$id}";
        echo $query;
        if ($this->ExecuteSQL($query)):
            return true;
        else:
            return false;
        endif;
    }
}