<?php


$smarty = new Template();
$clientes = new Clientes();

if(isset($_POST['cli_email']) && isset($_POST['cli_senha']) && isset($_POST['cli_cpf'])){
    $cli_nome = $_POST['cli_nome'];
    $cli_sobrenome = $_POST['cli_sobrenome'];
    $cli_cpf = $_POST['cli_cpf'];
    $cli_data_nasc = $_POST['cli_data_nasc'];
    $cli_sexo = $_POST['cli_sexo'];
    $cli_celular = $_POST['cli_celular'];
    $cli_telefone = $_POST['cli_telefone'];
    $cli_email = $_POST['cli_email'];
    $cli_senha = $_POST['cli_senha'];
    $cli_cep = $_POST['cli_cep'];
    $cli_endereco = $_POST['cli_endereco'];
    $cli_numero = $_POST['cli_numero'];
    $cli_bairro = $_POST['cli_bairro'];
    $cli_cidade = $_POST['cli_cidade'];
    $cli_uf = $_POST['cli_uf'];
    $cli_complemento = $_POST['cli_complemento'];
    $cli_data_cad = Sistema::dataAtualUs();
    $cli_hora_cad = Sistema::horaAtual();


    //CHAMAR A FUNÇÃO PARA PREPARAR OS DADOS
    $clientes->prepararDados(
        $cli_nome,
        $cli_sobrenome,
        $cli_cpf,
        $cli_data_nasc,
        $cli_sexo,
        $cli_celular,
        $cli_telefone,
        $cli_email,
        $cli_senha,
        $cli_cep,
        $cli_endereco,
        $cli_numero,
        $cli_bairro,
        $cli_cidade,
        $cli_uf,
        $cli_complemento,
        $cli_data_cad,
        $cli_hora_cad
    );

        $clientes->inserir();

    echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
            <h4>Cadastro efetuado com sucesso<h4>
            <p>Redirecionando...</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>' . Rotas::redirecionar(3, Rotas::pagLogin());
        exit();
    
    $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
    $smarty->assign('PAG_HOME', Rotas::getSiteHome());
    $smarty->assign('PAG_LOGIN', Rotas::pagLogin());
}else{
    $smarty->display('cadastro.tpl');
}
    