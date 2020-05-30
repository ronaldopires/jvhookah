<?php

class Paginacao extends Conexao {
    public $limite, $inicio, $total_paginas, $link = array();

    function GetPaginacao($campo, $tabela){
        $query = " SELECT {$campo} FROM {$tabela} ";
        $this->ExecuteSQL($query);
        $total_itens = $this->TotalDados();
        $this->limite = Config::BD_LIMIT_PAG;
        $paginas = ceil($total_itens / $this->limite);

        $this->total_paginas = $paginas;

        $p = (int)isset($_GET['p']) ? $_GET['p'] : 1;
        
        if($p < 1 ){
            $p = 1;
        }else if ($p > $paginas){
            $p = $paginas;
        }
        $this->inicio = ($p * $this->limite) - $this->limite;

        $tolerancia = 1;
        $mostrar = $p + $tolerancia;

        if($mostrar > $paginas){
            $mostrar = $paginas;
        }

        for($i = ($p - $tolerancia); $i <= $mostrar; $i++){
            $i < 1 ? $i = 1 : $i;
            array_push($this->link, $i);
        }
    }
}