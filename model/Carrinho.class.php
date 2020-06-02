<?php

class Carrinho
{
    private $total_valor, $total_peso, $itens = array();

    //Cria uma sessão com os itens do carrinho
    public function getCarrinho()
    {
        $i = 1;
        $sub = 1.00;
        $peso = 0;

        //Laço nos itens criando uma sessão
        foreach ($_SESSION['CARRINHO'] as $lista) {
            $sub = ($lista['VALOR_US'] - $lista['DESCONTO']) * $lista['QTD'];
            $this->total_valor += $sub;

            $peso = $lista['PESO'] * $lista['QTD'];
            $this->total_peso += $peso;

            $this->itens[$i] = array(
                'pro_id' => $lista['ID'],
                'pro_nome' => $lista['NOME'],
                'pro_valor' => $lista['VALOR'],
                'pro_valor_us' => $lista['VALOR_US'],
                'pro_desconto' => $lista['DESCONTO'],
                'pro_desc' => $lista['DESC'],
                'pro_cor' => $lista['COR'],
                'pro_tamanho' => $lista['TAMANHO'],
                'pro_estoque' => $lista['ESTOQUE'],
                'pro_peso' => $lista['PESO'],
                'pro_largura' => $lista['LARGURA'],
                'pro_altura' => $lista['ALTURA'],
                'pro_comprimento' => $lista['COMPRIMENTO'],
                'pro_qtd' => $lista['QTD'],
                'pro_img' => $lista['IMG'],
                'pro_slug' => $lista['SLUG'],
                'pro_subTotal' => Sistema::moedaBr($sub),
                'pro_subTotal_us' => $sub,
            );
            $i++;
        }
        if (count($this->itens) > 0) {
            return $this->itens;
        } else {
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Sem produtos no carrinho<h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>' . Rotas::redirecionar(3, Rotas::pagProdutos());
        }
    }

    public function getTotal()
    {
        return $this->total_valor;
    }

    public function getPeso()
    {
        return $this->total_peso;
    }

    public function carrinhoProduto($id)
    {
        $produtos = new Produtos();
        $produtos->getProdutosId($id);

        foreach ($produtos->getItens() as $pro) {
            // Laço para cada item do carrinho
            $ID = $pro['pro_id'];
            $NOME = $pro['pro_nome'];
            $VALOR = $pro['pro_valor'];
            $VALOR_US = $pro['pro_valor_us'];
            $DESCONTO = $pro['pro_desconto'];
            $DESC = $pro['pro_desc'];
            $COR = $pro['pro_cor'];
            $TAMANHO = $pro['pro_tamanho'];
            $ESTOQUE = $pro['pro_estoque'];
            $PESO = $pro['pro_peso'];
            $LARGURA = $pro['pro_largura'];
            $ALTURA = $pro['pro_altura'];
            $COMPRIMENTO = $pro['pro_comprimento'];
            $QTD = 1;
            $IMG = $pro['pro_img'];
            $SLUG = $pro['pro_slug'];
            $ACAO = $_POST['acao'];
        }

        switch ($ACAO) {
            case 'add':
                //Adiciona itens no carrinho se não existir
                if (!isset($_SESSION['CARRINHO'][$ID]['ID'])) {
                    $_SESSION['CARRINHO'][$ID]['ID'] = $ID;
                    $_SESSION['CARRINHO'][$ID]['NOME'] = $NOME;
                    $_SESSION['CARRINHO'][$ID]['VALOR'] = $VALOR;
                    $_SESSION['CARRINHO'][$ID]['VALOR_US'] = $VALOR_US;
                    $_SESSION['CARRINHO'][$ID]['DESCONTO'] = $DESCONTO;
                    $_SESSION['CARRINHO'][$ID]['DESC'] = $DESC;
                    $_SESSION['CARRINHO'][$ID]['COR'] = $COR;
                    $_SESSION['CARRINHO'][$ID]['TAMANHO'] = $TAMANHO;
                    $_SESSION['CARRINHO'][$ID]['ESTOQUE'] = $ESTOQUE;
                    $_SESSION['CARRINHO'][$ID]['PESO'] = $PESO;
                    $_SESSION['CARRINHO'][$ID]['LARGURA'] = $LARGURA;
                    $_SESSION['CARRINHO'][$ID]['ALTURA'] = $ALTURA;
                    $_SESSION['CARRINHO'][$ID]['COMPRIMENTO'] = $COMPRIMENTO;
                    $_SESSION['CARRINHO'][$ID]['QTD'] = $QTD;
                    $_SESSION['CARRINHO'][$ID]['IMG'] = $IMG;
                    $_SESSION['CARRINHO'][$ID]['SLUG'] = $SLUG;
                    Rotas::redirecionar(0, Rotas::pagCarrinho());
                } else
                if ($_SESSION['CARRINHO'][$ID]['QTD'] < $_SESSION['CARRINHO'][$ID]['ESTOQUE']) {
                    $_SESSION['CARRINHO'][$ID]['QTD'] += $QTD;
                    Rotas::redirecionar(0, Rotas::pagCarrinho());

                } else {
                    echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                                    <h4>A quantidade desejada para o ' . $NOME . ' está indisponível.<h4>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button></div>' . Rotas::redirecionar(3, Rotas::pagCarrinho());
                }

                //Rotas::redirecionar(3, Rotas::pagCarrinho());

                break;
            case 'del':
                //Deletar produto pelo id
                $this->carrinhoDeletar($id);
                Rotas::redirecionar(0, Rotas::pagCarrinho());
                break;
            case 'limpar':
                //Deletar todos produtos do carrinho
                $this->carrinhoLimpar();
                echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                                <h4>Itens removidos com sucesso.<h4>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></div>';

                break;
            case 'remover':
                //Remove item
                $this->remover($ID, $QTD);
                Rotas::redirecionar(0, Rotas::pagCarrinho());
                break;
            case 'quantidade':
                //Altera a quantidade
                //$this->quantidade($ID);
                if (!$this->quantidade($ID)) {
                    Rotas::redirecionar(0, Rotas::pagCarrinho());
                }
                break;
        }
    }

    private function carrinhoDeletar($id)
    {
        unset($_SESSION['CARRINHO'][$id]);
    }

    private function carrinhoLimpar()
    {
        unset($_SESSION['CARRINHO']);
        //unset($_SESSION['CUPOM']);
    }
    private function remover($ID)
    {
        $_SESSION['CARRINHO'][$ID]['QTD']--;
        if (!isset($_POST['pro_qtd']) or $_POST['pro_qtd'] <= 1) {
            $_SESSION['CARRINHO'][$ID]['QTD'] = 1;
        }
    }

    private function quantidade($ID)
    {
        $_SESSION['CARRINHO'][$ID]['QTD'] = (int) $_POST['pro_qtd'];
        if (!isset($_POST['pro_qtd']) or $_POST['pro_qtd'] < 1) {
            $_SESSION['CARRINHO'][$ID]['QTD'] = 1;
        }

        if ($_SESSION['CARRINHO'][$ID]['QTD'] > $_SESSION['CARRINHO'][$ID]['ESTOQUE']) {
            $_SESSION['CARRINHO'][$ID]['QTD'] = 1;
            $NOME = $_SESSION['CARRINHO'][$ID]['NOME'];
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                                <h4 class="">A quantidade desejada para ' . $NOME . ' está indisponível.<h4>
                                <p>Quantidade em estoque é ' . $_SESSION['CARRINHO'][$ID]['ESTOQUE'] . '</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></div>';
            return true;
        }
        return false;
    }

}
