<?php

class Endereco extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }
    public function gravarEndereco($cep, $endereco, $bairro, $cidade, $uf, $numero, $complemento, $id)
    {
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
            ':id' => (int) $id,

        );
        if ($this->executeSql($query, $params)):
            return true;
        else:
            return false;
        endif;

    }
    //Consultar Endereços
    public function enderecoCliente($id)
    {
        $query = "SELECT * FROM {$this->prefix}enderecos e INNER JOIN {$this->prefix}clientes c ON e.endereco_cli_id = c.cli_id";
        $query .= " WHERE cli_id = {$id}";

        $this->executeSql($query);
        if ($this->totalDados() > 0) {
            $i = 1;
            while ($lista = $this->listarDados()):
                $this->itens[$i] = array(
                    'endereco_id' => $lista['endereco_id'],
                    'endereco_cli_cep' => $lista['endereco_cli_cep'],
                    'endereco_cli_endereco' => $lista['endereco_cli_endereco'],
                    'endereco_cli_bairro' => $lista['endereco_cli_bairro'],
                    'endereco_cli_cidade' => $lista['endereco_cli_cidade'],
                    'endereco_cli_uf' => $lista['endereco_cli_uf'],
                    'endereco_cli_numero' => $lista['endereco_cli_numero'],
                    'endereco_cli_complemento' => $lista['endereco_cli_complemento'],
                );
                $i++;
            endwhile;
            return true;
        } else {
            return false;
        }
    }

    //Atualizar Endereço
    public function atualizarEndereco($cep, $endereco, $bairro, $cidade, $uf, $numero, $complemento, $id)
    {
        $query = "UPDATE {$this->prefix}enderecos SET endereco_cli_cep = :cep, endereco_cli_endereco = :endereco, endereco_cli_bairro = :bairro, endereco_cli_cidade = :cidade, ";
        $query .= " endereco_cli_uf = :uf, endereco_cli_numero = :numero, endereco_cli_complemento = :complemento ";
        $query .= " WHERE endereco_cli_id = :id ";

        $params = array(
            ':cep' => $cep,
            ':endereco' => $endereco,
            ':bairro' => $bairro,
            ':cidade' => $cidade,
            ':uf' => $uf,
            ':numero' => $numero,
            ':complemento' => $complemento,
            ':id' => (int) $id,
        );
        if ($this->executeSql($query, $params)):
            return true;
        else:
            return false;
        endif;
    }
}
