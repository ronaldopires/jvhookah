<?php

class Carrinho
{
    private $total_valor, $total_peso, $itens = array();

    //Cria uma sessão com os itens do carrinho
    public function GetCarrinho($sessao = null)
    {
        $i = 1;
        $sub = 1.00;
        $peso = 0;

        //Laço nos itens criando uma sessão
        foreach ($_SESSION['PRO'] as $lista) {
            $sub = ($lista['VALOR_US'] * $lista['QTD']);
            $this->total_valor += $sub;

            $peso = $lista['PESO'] * $lista['QTD'];
            $this->total_peso += $peso;

            $this->itens[$i] = array(
                'pro_id' => $lista['ID'],
                'pro_nome' => $lista['NOME'],
                'pro_valor' => $lista['VALOR'],
                'pro_valor_us' => $lista['VALOR_US'],
                'pro_desc' => $lista['DESCONTO'],
                'pro_cor' => $lista['COR'],
                'pro_tamanho' => $lista['TAMANHO'],
                'pro_peso' => $lista['PESO'],
                'pro_qtd' => $lista['QTD'],
                'pro_estoque' => $lista['ESTOQUE'],
                'pro_img' => $lista['IMG'],
                'pro_link' => $lista['LINK'],
                'pro_subTotal' => Sistema::MoedaBR($sub),
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
            </button></div>' . Rotas::Redirecionar(3, Rotas::pag_Produtos());
        }
    }

    public function GetTotal()
    {
        return $this->total_valor;
    }

    public function GetPeso()
    {
        return $this->total_peso;
    }

    public function CarrinhoADD($id)
    {
        $produtos = new Produtos();
        $produtos->GetProdutos($id);

        foreach ($produtos->GetItens() as $pro) {
            // Laço para cada item do carrinho
            $ID = $pro['pro_id'];
            $NOME = $pro['pro_nome'];
            $VALOR = $pro['pro_valor'];
            $VALOR_US = $pro['pro_valor_us'];
            $DESCONTO = $pro['pro_desc'];
            $COR = $pro['pro_cor'];
            $TAMANHO = $pro['pro_tamanho'];
            $ESTOQUE = $pro['pro_estoque'];
            $PESO = $pro['pro_peso'];
            $QTD = 1;
            $IMG = $pro['pro_img'];
            $LINK = Rotas::pag_Shopping_Detail() . '/' . $ID . '/' . $pro['pro_slug'];
            $ACAO = $_POST['acao'];
        }

        switch ($ACAO) {
            case 'add':
                //Adiciona itens no carrinho se não existir
                if (!isset($_SESSION['PRO'][$ID]['ID'])) {
                    $_SESSION['PRO'][$ID]['ID'] = $ID;
                    $_SESSION['PRO'][$ID]['NOME'] = $NOME;
                    $_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
                    $_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
                    $_SESSION['PRO'][$ID]['DESCONTO'] = $DESCONTO;
                    $_SESSION['PRO'][$ID]['COR'] = $COR;
                    $_SESSION['PRO'][$ID]['TAMANHO'] = $TAMANHO;
                    $_SESSION['PRO'][$ID]['ESTOQUE'] = $ESTOQUE;
                    $_SESSION['PRO'][$ID]['PESO'] = $PESO;
                    $_SESSION['PRO'][$ID]['QTD'] = $QTD;
                    $_SESSION['PRO'][$ID]['IMG'] = $IMG;
                    $_SESSION['PRO'][$ID]['LINK'] = $LINK;
                    Rotas::Redirecionar(0, Rotas::pag_Shopping_Cart());
                } else
                if ($_SESSION['PRO'][$ID]['QTD'] < $_SESSION['PRO'][$ID]['ESTOQUE']) {
                    $_SESSION['PRO'][$ID]['QTD'] += $QTD;
                    Rotas::Redirecionar(0, Rotas::pag_Shopping_Cart());
                    
                } else {
                    echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                                    <h4>A quantidade desejada para o ' . $NOME . ' está indisponível.<h4>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button></div>' . Rotas::Redirecionar(3, Rotas::pag_Shopping_Cart());
                }

                //Rotas::Redirecionar(3, Rotas::pag_Shopping_Cart());

                break;
            case 'del':
                //Deletar produto pelo id
                $this->CarrinhoDeletar($id);
                Rotas::Redirecionar(0, Rotas::pag_Shopping_Cart());
                break;
            case 'limpar':
                //Deletar todos produtos do carrinho
                $this->CarrinhoLimpar();
                echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                                <h4>Itens removidos com sucesso.<h4>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></div>' . Rotas::Redirecionar(3, Rotas::pag_Shopping_Cart());

                break;
            case 'remover':
                //Remove item
                $this->Remover($ID, $QTD);
                Rotas::Redirecionar(0, Rotas::pag_Shopping_Cart());
                break;
            case 'quantidade':
                //Altera a quantidade
                //$this->Quantidade($ID);
                if (!$this->Quantidade($ID)) {
                    Rotas::Redirecionar(0, Rotas::pag_Shopping_Cart());
                }
                break;
        }
    }

    private function CarrinhoDeletar($id)
    {
        unset($_SESSION['PRO'][$id]);
    }

    private function CarrinhoLimpar()
    {
        unset($_SESSION['PRO']);
        //unset($_SESSION['CUPOM']);
    }
    private function Remover($ID)
    {
        $_SESSION['PRO'][$ID]['QTD']--;
        if (!isset($_POST['pro_qtd']) or $_POST['pro_qtd'] <= 1) {
            $_SESSION['PRO'][$ID]['QTD'] = 1;
        }
    }

    private function Quantidade($ID)
    {
        $_SESSION['PRO'][$ID]['QTD'] = (int) $_POST['pro_qtd'];
        if (!isset($_POST['pro_qtd']) or $_POST['pro_qtd'] < 1) {
            $_SESSION['PRO'][$ID]['QTD'] = 1;
        }

        if ($_SESSION['PRO'][$ID]['QTD'] > $_SESSION['PRO'][$ID]['ESTOQUE']) {
            $_SESSION['PRO'][$ID]['QTD'] = 1;
            $NOME = $_SESSION['PRO'][$ID]['NOME'];
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                                <h4 class="">A quantidade desejada para ' . $NOME . ' está indisponível.<h4>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></div>' . Rotas::Redirecionar(3, Rotas::pag_Shopping_Cart());
            return true;
        }
        return false;
    }

}
