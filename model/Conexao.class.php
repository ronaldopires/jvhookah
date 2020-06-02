<?php

class Conexao extends Config
{
    private $host, $user, $senha, $banco;
    protected $obj, $itens = array(), $prefix;

    public $paginacao_links, $total_paginas, $limite, $inicio;

    public function __construct()
    {
        $this->host = self::BD_HOST;
        $this->user = self::BD_USER;
        $this->senha = self::BD_SENHA;
        $this->banco = self::BD_BANCO;
        $this->prefix = self::BD_PREFIX;

        try {
            if ($this->conectar() == null) {
                $this->conectar();
            }
        } catch (Exception $e) {
            exit($e->getMessage() . '<h2>Erro ao conectar com o banco de dados!</h2>');
        }
    }
    //conectar no banco
    private function conectar()
    {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //Configura o banco para utf-8
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        );
        $link = new PDO("mysql:host={$this->host};dbname={$this->banco}",
            $this->user, $this->senha, $options);
        return $link;
    }

    //Função para executar no banco
    public function executeSql($query, array $params = null)
    {
        //Prepare com o conectar vai executar a query e retornar o resultado num objeto
        $this->obj = $this->conectar()->prepare($query);

        //Verifica os paramentros passados pela url
        $pkCount = (is_array($params) ? count($params) : 0);
        if ($pkCount > 0) {
            foreach ($params as $key => $value) {
                $this->obj->bindvalue($key, $value);
            }
        }
        return $this->obj->execute();
    }

    //Mostrar o resultado da consulta com um array associativo
    public function listarDados()
    {
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }
    //Executa um rowcount para verificar quantos objetos existem
    public function totalDados()
    {
        return $this->obj->rowCount();
    }
    //Faz uma verificação de itens
    public function getItens()
    {
        return $this->itens;
    }
    //Páginacao
    public function paginacaoLink($campo, $tabela)
    {
        $pag = new Paginacao();
        $pag->getPaginacao($campo, $tabela);
        $this->paginacao_links = $pag->link;
        $this->total_paginas = $pag->total_paginas;
        $this->limite = $pag->limite;
        $this->inicio = $pag->inicio;

        if ($this->total_paginas > 0) {
            return " LIMIT {$this->inicio}, {$this->limite} ";
        } else {
            return "";
        }
    }
    protected function paginacao($paginas = array())
    {
        if (isset($_GET['p'])) {
            $p_atual = $_GET['p'];
        } else {
            $p_atual = 1;
        }

        $pag = '<nav aria-label="Navegação de página exemplo">';
        $pag .= '<ul class="pagination justify-content-center">';
        //Primeira página recebe sempre p=1
        $pag .= '<li class="page-item"><a class="page-link" href="?p=1">Primeira</a></li>';
        //Anterior recebe p-1
        $p_atual > 1 ? $pag .= '<li class="page-item" title="Anterior"><a class="page-link" href="?p=' . ($p_atual - 1) . '" ><i class="ti-angle-double-left"></i></a></li>' : $this->inicio;

        //Páginas
        foreach ($paginas as $p) {
            if ($p_atual == $p) {
                $pag .= '<li class="page-item active"><a class="page-link" href="?p=' . $p . '">' . $p . '<span class="sr-only">(atual)</span></a></li>';
            } else {
                $pag .= '<li class="page-item"><a class="page-link" href="?p=' . $p . '">' . $p . '</a></li>';
            }
        }

        $p_atual < $this->total_paginas ? $pag .= '<li class="page-item" title="Avançar"><a class="page-link" href="?p=' . ($p_atual + 1) . '"><i class="ti-angle-double-right"></i></a></li>' : $this->total_paginas;
        $pag .= '<li class="page-item" title="Última"><a class="page-link" href="?p=' . $this->total_paginas . '">Última</a></li>';
        $pag .= '</ul></nav>';

        if ($this->total_paginas > 1) {
            return $pag;
        }

    }
    public function mostrarPaginacao()
    {
        return $this->paginacao($this->paginacao_links);
    }

}
