<?php

class Cupons extends Conexao
{

    private $cupom_nome, $cupom_desconto, $cupom_inicial, $cupom_final, $cupom_tipo, $cupom_qtd;
    public function __construct()
    {
        parent::__construct();
    }

    public function getCupons()
    {
        $query = "SELECT * FROM {$this->prefix}cupons ORDER BY cupom_id DESC";

        $this->executeSql($query);
        $this->getLista();
    }

    private function getLista()
    {
        $i = 1;
        while ($lista = $this->listarDados()):
            $this->itens[$i] = array(
                'cupom_id' => $lista['cupom_id'],
                'cupom_nome' => $lista['cupom_nome'],
                'cupom_desconto' => $lista['cupom_desconto'],
                'cupom_inicial' => $lista['cupom_inicial'],
                'cupom_final' => $lista['cupom_final'],
                'cupom_tipo' => $lista['cupom_tipo'],
                'cupom_qtd' => $lista['cupom_qtd'],

            );
            $i++;
        endwhile;
    }

    public function getCupomNome($cupom_nome)
    {
        $this->setCupom_nome($cupom_nome);

        $query = " SELECT * FROM {$this->prefix}cupons WHERE cupom_nome = :cupom";
        $params = array(
            ':cupom' => $this->getCupom_nome(),
        );

        $this->executeSql($query, $params);

        $this->getItens();

        if ($this->totalDados() > 0):
            $lista = $this->listarDados();
            $data_inicial = $lista['cupom_data_inicial'];
            $hora_inicial = $lista['cupom_hora_inicial'];
            $data_final = $lista['cupom_data_final'];
            $hora_final = $lista['cupom_hora_final'];
            $data_atual = date('Y-m-d H:i:s');
            $hora_atual = Sistema::horaAtual();
            if($data_final < $data_atual && $hora_final < $hora_atual){
                echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                    <h4>Cupom Expirado<h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>';

            }else if ($data_inicial > $data_atual && $hora_inicial > $hora_atual){
                echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                    <h4>Cupom indisponível<h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>';
            }else{

                // Cria uma sessão com os dados do Cupom para teste
                $_SESSION['CUPOM']['cupom_id'] = $lista['cupom_id'];
                $_SESSION['CUPOM']['cupom_nome'] = $lista['cupom_nome'];
                $_SESSION['CUPOM']['cupom_desconto'] = $lista['cupom_desconto'];
                $_SESSION['CUPOM']['cupom_data_inicial'] = $lista['cupom_data_inicial'];
                $_SESSION['CUPOM']['cupom_hora_inicial'] = $lista['cupom_hora_inicial'];
                $_SESSION['CUPOM']['cupom_data_final'] = $lista['cupom_data_final'];
                $_SESSION['CUPOM']['cupom_hora_final'] = $lista['cupom_hora_final'];
                $_SESSION['CUPOM']['cupom_tipo'] = $lista['cupom_tipo'];
                $_SESSION['CUPOM']['cupom_qtd'] = $lista['cupom_qtd'];
                
                return true;
            }

        else:
            return false;

        endif;
    }

    //Inserir cupons
    public function inserir($cupom_nome, $cupom_desconto, $cupom_inicial, $cupom_final, $cupom_tipo, $cupom_qtd)
    {
        $this->setCupom_nome($cupom_nome);
        $this->setCupom_desconto($cupom_desconto);
        $this->setCupom_inicial($cupom_inicial);
        $this->setCupom_final($cupom_final);
        $this->setCupom_tipo($cupom_tipo);
        $this->setCupom_qtd($cupom_qtd);

        $query = " INSERT INTO {$this->prefix}cupons (cupom_nome, cupom_desconto, cupom_inicial, cupom_final, cupom_tipo, cupom_qtd )";
        $query .= " VALUES (:cupom_nome, :cupom_desconto, :cupom_inicial, :cupom_final, :cupom_tipo, :cupom_qtd )";

        $params = array(
            ':cupom_nome' => $this->getCupom_nome(),
            ':cupom_desconto' => $this->getCupom_desconto(),
            ':cupom_inicial' => $this->getCupom_inicial(),
            ':cupom_final' => $this->getCupom_final(),
            ':cupom_tipo' => $this->getCupom_tipo(),
            ':cupom_qtd' => $this->getCupom_qtd(),
        );

        if ($this->executeSql($query, $params)):
            return true;
        else:
            return false;
        endif;
    }

    //EDITAR CUPONS
    public function editar($cupom_id, $cupom_nome, $cupom_desconto, $cupom_inicial, $cupom_final, $cupom_tipo, $cupom_qtd)
    {

        $this->setCupom_nome($cupom_nome);
        $this->setCupom_desconto($cupom_desconto);
        $this->setCupom_inicial($cupom_inicial);
        $this->setCupom_final($cupom_final);
        $this->setCupom_tipo($cupom_tipo);
        $this->setCupom_qtd($cupom_qtd);

        $query = " UPDATE {$this->prefix}cupons ";
        $query .= " SET cupom_nome = :cupom_nome, cupom_desconto = :cupom_desconto, cupom_inicial = :cupom_inicial, cupom_final = :cupom_final, cupom_tipo = :cupom_tipo, cupom_qtd = :cupom_qtd ";
        $query .= " WHERE cupom_id = :cupom_id ";

        $params = array(
            ':cupom_id' => (int) $cupom_id,
            ':cupom_nome' => $this->getCupom_nome(),
            ':cupom_desconto' => $this->getCupom_desconto(),
            ':cupom_inicial' => $this->getCupom_inicial(),
            ':cupom_final' => $this->getCupom_final(),
            ':cupom_tipo' => $this->getCupom_tipo(),
            ':cupom_qtd' => $this->getCupom_qtd(),
        );

        if ($this->executeSql($query, $params)):
            return true;
        else:
            return false;
        endif;
    }
    public function getQtd($cupom_nome, $cupom_qtd)
    {
        $this->setCupom_nome($cupom_nome);
        $this->setCupom_qtd($cupom_qtd);

        $query = " UPDATE {$this->prefix}cupons SET cupom_qtd = :cupom_qtd WHERE cupom_nome = :cupom_nome";

        $params = array(
            ':cupom_nome' => $this->getCupom_nome(),
            ':cupom_qtd' => $this->getCupom_qtd(),
        );

        if ($this->executeSql($query, $params)):
            unset($_SESSION['CUPOM']);
            return true;
        else:
            return false;
        endif;
    }

    //FUNÇÃO APAGAR CUPOM
    public function apagar($cupom_id)
    {
        $query = " DELETE FROM {$this->prefix}cupons WHERE cupom_id = :id";

        $params = array(':id' => (int) $cupom_id);

        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;

    }

    private function setCupom_nome($cupom_nome)
    {
        $this->cupom_nome = $cupom_nome;
    }
    private function setCupom_desconto($cupom_desconto)
    {
        $this->cupom_desconto = $cupom_desconto;
    }
    private function setCupom_inicial($cupom_inicial)
    {
        $this->cupom_inicial = $cupom_inicial;
    }
    private function setCupom_final($cupom_final)
    {
        $this->cupom_final = $cupom_final;
    }
    private function setCupom_tipo($cupom_tipo)
    {
        $this->cupom_tipo = $cupom_tipo;
    }
    private function setCupom_qtd($cupom_qtd)
    {
        $this->cupom_qtd = $cupom_qtd;
    }
    public function getCupom_nome()
    {
        return $this->cupom_nome;
    }
    public function getCupom_desconto()
    {
        return $this->cupom_desconto;
    }
    public function getCupom_inicial()
    {
        return $this->cupom_inicial;
    }
    public function getCupom_final()
    {
        return $this->cupom_final;
    }
    public function getCupom_tipo()
    {
        return $this->cupom_tipo;
    }
    public function getCupom_qtd()
    {
        return $this->cupom_qtd;
    }

}
