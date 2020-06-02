<?php

class ProdutoImages extends Conexao
{
    public function getImagePro($id)
    {
        $query = "SELECT * FROM {$this->prefix}imagens WHERE img_pro_id = {$id}";

        $params = array(':id' => (int) $id);

        $this->ExecuteSQL($query, $params);
        $this->getLista();
    }

    public function getLista()
    {
        $i = 1;
        while ($lista = $this->listarDados()):
            $this->itens[$i] = array(
                'img_id' => $lista['img_id'],
                'img_nome_p' => Rotas::imageLink($lista['img_nome'], 150, 150),
                'img_nome' => Rotas::imageLink($lista['img_nome'], 500, 500),
                'img_nome_g' => Rotas::imageLink($lista['img_nome'], 700, 700),
                'img_nome_gg' => Rotas::imageLink($lista['img_nome'], 1200, 1200),
                'img_pro_id' => $lista['img_pro_id'],
                'img_pasta' => $lista['img_nome'],

            );
            $i++;
        endwhile;
    }
}
