<?php

Class Conexao extends Config{
    private $host, $user, $senha, $banco;
    protected $obj, $itens = array(), $prefix;
    function __construct(){
        $this->host = self::BD_HOST;
        $this->user = self::BD_USER;
        $this->senha = self::BD_SENHA;
        $this->banco = self::BD_BANCO;
        $this->prefix = self::BD_PREFIX;

        try {
            if($this->Conectar() == null){
                $this->Conectar();
            }
        } catch (Exception $e) {
            exit($e->getMessage(). '<h2>Erro ao conectar com o banco de dados!</h2>');
        }
    }
    //Conectar no banco
    private function Conectar(){
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //Configura o banco para utf-8 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING  
        );
        $link = new PDO("mysql:host={$this->host};dbname={$this->banco}",
        $this->user,$this->senha, $options);
        return $link;
    }
    
    //Função para executar no banco
    function ExecuteSQL($query, array $params = NULL){
        //Prepare com o conectar vai executar a query e retornar o resultado num objeto
        $this->obj = $this->Conectar()->prepare($query);
        return $this->obj->execute();
    }
    //Mostrar o resultado da consulta com um array associativo
    function ListarDados(){
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }
    //Executa um rowcount para verificar quantos objetos existem
    function TotalDados(){
        return $this->obj->rowCount();
    }
    //Faz uma verificação de itens
    function GetItens(){
        return $this->itens;
    }

}