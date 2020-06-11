<?php

class LogSystem extends Conexao
{
    
    //Gera logs do sistema
    public function getLogger($msg, $tipo)
    {        
        $data = date("d-m-y");
        $hora = date("H:i:s");
        $ip = $_SERVER['REMOTE_ADDR'];

        echo $arquivo = Rotas::getSiteRaiz() . "view/logger/$tipo-$data.txt";

        $texto = "[$hora][$ip]> $msg \n";

        $manipular = fopen("$arquivo", "a+b");
        fwrite($manipular, $texto);
        fclose($manipular);
    }
}