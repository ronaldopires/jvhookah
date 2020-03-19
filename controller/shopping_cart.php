<?php
//Ações do carrinho
if(isset($_POST['acao'])){
    $id = (int)$_POST['pro_id'];
    if (!isset($_POST['pro_id']) or $_POST['pro_id'] < 1) {
        Rotas::Redirecionar(2, Rotas::pag_Shopping_Cart());
        exit('<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
        <h4> Erro na operação<h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button></div>'. Rotas::Redirecionar(3, Rotas::pag_Check_Out()));
    }else{
        $carrinho = new Carrinho();
    try {
        $carrinho->CarrinhoADD($id);
    } catch (Exception $e) {
        exit('<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
        <h4> Erro na operação<h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button></div>'. Rotas::Redirecionar(3, Rotas::pag_Check_Out()));
    }
    
    //Rotas::Redirecionar(0, Rotas::pag_Check_Out());
}


}

include_once('carrinho.php');