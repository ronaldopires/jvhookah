<?php

$smarty = new Template();


if (Login::Logado() && !empty($_SESSION['CLI'])) {
    $cliente = new Clientes();
    $pedidos = new Pedidos();
    $novo_endereco = new Endereco();

    $id = $_SESSION['CLI']['cli_id'];
    $pedidos->GetPedidosCliente($id);
    
    $smarty->assign('TOTAL_PEDIDO',$pedidos->TotalDados());

    //SESSÃO DADOS PESSOAIS
    if(isset($_POST['cli_nome']) && isset($_POST['cli_sobrenome']) && isset($_POST['cli_sexo'])){
        $cli_nome = $_POST['cli_nome'];
        $cli_sobrenome = $_POST['cli_sobrenome'];
        $cli_data_nasc = $_POST['cli_data_nasc'];
        $cli_sexo = $_POST['cli_sexo'];
        $cli_celular = $_POST['cli_celular'];
        $cli_telefone = $_POST['cli_telefone'];
    
        //CHAMAR A FUNÇÃO PARA PREPARAR OS DADOS
        $cliente->PrepararEditarDados(
            $cli_nome,
            $cli_sobrenome,
            $cli_data_nasc,
            $cli_sexo,
            $cli_celular,
            $cli_telefone    
        );

        if($cliente->EditarDados($id)){

            $_SESSION['CLI']['cli_nome'] = $_POST['cli_nome'];
            $_SESSION['CLI']['cli_sobrenome'] = $_POST['cli_sobrenome'];
            $_SESSION['CLI']['cli_data_nasc'] = $_POST['cli_data_nasc'];
            $_SESSION['CLI']['cli_sexo'] = $_POST['cli_sexo'];
            $_SESSION['CLI']['cli_celular'] = $_POST['cli_celular'];
            $_SESSION['CLI']['cli_telefone'] = $_POST['cli_telefone'];
            
            exit('<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
                    <h4>Dados atualiados com sucesso.<h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>'. Rotas::Redirecionar(2, Rotas::pag_Profile()));
        }else{
            exit('<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                        <h4>Erro ao atualizar os dados.<h4>
                        <p>Tente novamente.</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button></div>'. Rotas::Redirecionar(3, Rotas::pag_Profile()));
        }
        
    }
    //SESSÃO ENDEREÇO
    if(isset($_POST['cli_cep']) && isset($_POST['cli_endereco']) && isset($_POST['cli_cidade'])){
        
    $cli_cep = $_POST['cli_cep'];
    $cli_endereco = $_POST['cli_endereco'];
    $cli_numero = $_POST['cli_numero'];
    $cli_bairro = $_POST['cli_bairro'];
    $cli_cidade = $_POST['cli_cidade'];
    $cli_uf = $_POST['cli_uf'];
    $cli_complemento = $_POST['cli_complemento'];


    //CHAMAR A FUNÇÃO PARA PREPARAR OS DADOS
    $cliente->PrepararEditarEndereco(
        $cli_cep,
        $cli_endereco,
        $cli_numero,
        $cli_bairro,
        $cli_cidade,
        $cli_uf,
        $cli_complemento
    );
    
    if($cliente->EditarEndereco($id)){
        $_SESSION['CLI']['cli_cep'] = $_POST['cli_cep'];
        $_SESSION['CLI']['cli_endereco'] = $_POST['cli_endereco'];
        $_SESSION['CLI']['cli_numero'] = $_POST['cli_numero'];
        $_SESSION['CLI']['cli_bairro'] = $_POST['cli_bairro'];
        $_SESSION['CLI']['cli_cidade'] = $_POST['cli_cidade'];
        $_SESSION['CLI']['cli_uf'] = $_POST['cli_uf'];
        $_SESSION['CLI']['cli_complemento'] = $_POST['cli_complemento'];

        echo '<script> alert("Dados atualizados com sucesso.");</script>;'. Rotas::Redirecionar(2, Rotas::pag_Profile());
    }else{
        echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                    <h4>Erro ao atualizar os dados.<h4>
                    <p>Tente novamente.</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>'. Rotas::Redirecionar(2, Rotas::pag_Profile());
        exit();
        }
    }

    //ADICIONAR NOVO ENDEREÇO
    if(isset($_POST['novo_cli_endereco']) && isset($_POST['novo_cli_bairro']) && isset($_POST['novo_cli_cidade'])){
        
        $cep = str_replace("-", "", $_POST['novo_cli_cep']);
        $endereco = $_POST['novo_cli_endereco'];
        $bairro = $_POST['novo_cli_bairro'];
        $cidade = $_POST['novo_cli_cidade'];
        $uf = $_POST['novo_cli_uf'];
        $numero = $_POST['novo_cli_numero'];
        $complemento = $_POST['novo_cli_complemento'];

        if($novo_endereco->GravarEndereco($cep, $endereco, $bairro, $cidade, $uf, $numero, $complemento, $id)){
            echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
                    <h4>Endereço adicionado com sucesso.<h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>'. Rotas::Redirecionar(2, Rotas::pag_Profile());
            exit();
        }else{
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Erro ao adicionar novo endereço.<h4>
            <p>Tente novamente.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>'. Rotas::Redirecionar(2, Rotas::pag_Profile());
            exit();
        }

    }

    //EDITAR NOVO ENDEREÇO
    if(isset($_POST['endereco_cli_endereco']) && isset($_POST['endereco_cli_bairro']) && isset($_POST['endereco_cli_cidade'])){
        $cep = str_replace("-", "", $_POST['endereco_cli_cep']);
        $endereco = $_POST['endereco_cli_endereco'];
        $bairro = $_POST['endereco_cli_bairro'];
        $cidade = $_POST['endereco_cli_cidade'];
        $uf = $_POST['endereco_cli_uf'];
        $numero = $_POST['endereco_cli_numero'];
        $complemento = $_POST['endereco_cli_complemento'];
        
        if($novo_endereco->AtualizarEndereco($cep, $endereco, $bairro, $cidade, $uf, $numero, $complemento, $id)){
            echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
                    <h4>Endereço adicionado com sucesso.<h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>'/* . Rotas::Redirecionar(2, Rotas::pag_Profile()) */;
            exit();
        }else{
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Erro ao adicionar novo endereço.<h4>
            <p>Tente novamente.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>'/* . Rotas::Redirecionar(2, Rotas::pag_Profile()) */;
            exit();
        }
    
    }

    //CONSULTA NOVO ENDEREÇO
    $novo_endereco->EnderecoCliente($id);

    $smarty->assign('ENDERECO', $novo_endereco->GetItens());
    $smarty->assign('TOTAL_ENDERECO', $novo_endereco->TotalDados());
    
    
    //Cria os assigns da sessao ativa do cliente
    foreach($_SESSION['CLI'] as $campo => $valor){
        $smarty->assign(strtoupper($campo), $valor);
    }
    //SESSÃO CONFIGURAÇÃO    
    if(isset($_POST['cli_email']) && isset($_POST['cli_senha']) && isset($_POST['cli_nova_senha'])){
        if($_POST['cli_email'] === $_SESSION['CLI']['cli_email']){
            $cliente->SenhaCliente($id);                
            foreach($cliente->GetItens() as $campo => $valor){
                
            }
            
            $cli_senha = md5($_POST['cli_senha']);
            $cli_nova_senha = md5($_POST['cli_nova_senha']);

            if($valor['cli_senha'] === $cli_senha) {
                if($cli_nova_senha === $cli_senha){
                    echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                    <h4>A senha atual e a nova senha estão iguais.<h4>
                    <p>Digite a sua senha novamente.</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>'. Rotas::Redirecionar(3, Rotas::pag_Profile());
                    exit();
                }else{
                    $cliente->SenhaUpdate($cli_nova_senha, $id);
                    echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
                    <h4>Senha atualizada com sucesso.<h4>
                    <p>Faça login novamente.</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>'. Rotas::Redirecionar(3, Rotas::pag_Logout());
                    exit();
                }
            }else {
                echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                <h4>Senha atual está incorreta<h4>
                <p>Digite a sua senha novamente.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></div>'. Rotas::Redirecionar(3, Rotas::pag_Profile());
                exit();
            }
            
        }else{
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                <h4>O endereço de e-mail digitado é diferente do cadastrado.<h4>
                <p>Digite seu e-mail corretamente.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></div>'. Rotas::Redirecionar(3, Rotas::pag_Profile());
                exit();
        }
        }
        //EXCLUIR CONTA
        if(isset($_POST['confirmar']) && $id != null && !empty($id)){
            if($cliente->Excluir($id)){
                
                echo '<div class="container text-center alert alert-dismissible fade show alert-warning" role="alert">
                <h4>Conta excluída com sucesso.<h4>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></div>'. Rotas::Redirecionar(3, Rotas::pag_Logout());
                exit();
            }else{
                echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                <h4>Erro ao tentar excluir a conta.<h4>
                <p>Tentar novamente.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></div>'. Rotas::Redirecionar(3, Rotas::pag_Profile());
                exit();
            }
        }

    $smarty->assign('DATA_CAD', Sistema::Fdata($_SESSION['CLI']['cli_data_cad']));
    $smarty->assign('PAG_PROFILE', Rotas::pag_Profile());
    $smarty->assign('PEDIDOS', $pedidos->GetItens());
    $smarty->assign('DETALHES_PEDIDOS', Rotas::pag_Order_Details());
    $smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
    $smarty->assign('LOGOFF', Rotas::pag_Logout());
    $smarty->display('profile.tpl');
    
} else {
    exit(Rotas::Redirecionar(0, Rotas::pag_Login()));
}