<?php

Class ProdutoImages extends Conexao{
    function GetImagePRO($id){
    $query = "SELECT * FROM {$this->prefix}imagens WHERE img_pro_id = {$id}";

    $params = array(':id' =>(int)$id);

        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    function GetLista()
    {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'img_id' => $lista['img_id'],
                'img_nome' => Rotas::ImageLink($lista['img_nome'], 500, 500),
                'img_pro_id' => $lista['img_pro_id'],
                'img_pasta' => $lista['img_nome']
                
            );
            $i++;
        endwhile;
    }
}