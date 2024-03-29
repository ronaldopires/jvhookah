<?php

$smarty = new Template();

if (Login::Logado() && !empty($_SESSION['CLI'])) {

    $log = new LogSystem();
    $cliente = new Clientes();
    $pedidos = new Pedidos();
    $novo_endereco = new Endereco();

    $id = $_SESSION['CLI']['cli_id'];
    $pedidos->getPedidosCliente($id);

    $smarty->assign('TOTAL_PEDIDO', $pedidos->totalDados());

    //SESSÃO DADOS PESSOAIS
    if (isset($_POST['cli_nome']) && isset($_POST['cli_sobrenome']) && isset($_POST['cli_sexo'])) {
        $cli_nome = $_POST['cli_nome'];
        $cli_sobrenome = $_POST['cli_sobrenome'];
        $cli_data_nasc = $_POST['cli_data_nasc'];
        $cli_sexo = $_POST['cli_sexo'];
        $cli_celular = $_POST['cli_celular'];
        $cli_telefone = $_POST['cli_telefone'];

        //CHAMAR A FUNÇÃO PARA PREPARAR OS DADOS
        $cliente->prepararEditarDados(
            $cli_nome,
            $cli_sobrenome,
            $cli_data_nasc,
            $cli_sexo,
            $cli_celular,
            $cli_telefone
        );

        if ($cliente->editarDados($id)) {

            $_SESSION['CLI']['cli_nome'] = $_POST['cli_nome'];
            $_SESSION['CLI']['cli_sobrenome'] = $_POST['cli_sobrenome'];
            $_SESSION['CLI']['cli_data_nasc'] = $_POST['cli_data_nasc'];
            $_SESSION['CLI']['cli_sexo'] = $_POST['cli_sexo'];
            $_SESSION['CLI']['cli_celular'] = $_POST['cli_celular'];
            $_SESSION['CLI']['cli_telefone'] = $_POST['cli_telefone'];

            $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} alterou os seguintes dados {$_SESSION['CLI']['cli_nome']}, {$_SESSION['CLI']['cli_sobrenome']}, {$_SESSION['CLI']['cli_data_nasc']}, {$_SESSION['CLI']['cli_sexo']}, {$_SESSION['CLI']['cli_celular']}, {$_SESSION['CLI']['cli_telefone']}";
            $log->getLogger($msg, "conta");
            
            echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
                    <h4>Dados atualiados com sucesso.<h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>' . Rotas::redirecionar(1, Rotas::pagMeuPerfil());
        } else {
            $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} tentou alterar {$_SESSION['CLI']['cli_nome']}, {$_SESSION['CLI']['cli_sobrenome']}, {$_SESSION['CLI']['cli_data_nasc']}, {$_SESSION['CLI']['cli_sexo']}, {$_SESSION['CLI']['cli_celular']}, {$_SESSION['CLI']['cli_telefone']}";
            $log->getLogger($msg, "conta");

            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                        <h4>Erro ao atualizar os dados.<h4>
                        <p>Tente novamente.</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button></div>' . Rotas::redirecionar(1, Rotas::pagMeuPerfil());
        }

    }
    //SESSÃO ENDEREÇO
    if (isset($_POST['cli_cep']) && isset($_POST['cli_endereco']) && isset($_POST['cli_cidade'])) {

        $cli_cep = $_POST['cli_cep'];
        $cli_endereco = $_POST['cli_endereco'];
        $cli_numero = $_POST['cli_numero'];
        $cli_bairro = $_POST['cli_bairro'];
        $cli_cidade = $_POST['cli_cidade'];
        $cli_uf = $_POST['cli_uf'];
        $cli_complemento = $_POST['cli_complemento'];

        //CHAMAR A FUNÇÃO PARA PREPARAR OS DADOS
        $cliente->prepararEditarEndereco(
            $cli_cep,
            $cli_endereco,
            $cli_numero,
            $cli_bairro,
            $cli_cidade,
            $cli_uf,
            $cli_complemento
        );

        if ($cliente->editarEndereco($id)) {
            $_SESSION['CLI']['cli_cep'] = $cli_cep;
            $_SESSION['CLI']['cli_endereco'] = $cli_endereco;
            $_SESSION['CLI']['cli_numero'] = $cli_numero;
            $_SESSION['CLI']['cli_bairro'] = $cli_bairro;
            $_SESSION['CLI']['cli_cidade'] = $cli_cidade;
            $_SESSION['CLI']['cli_uf'] = $cli_uf;
            $_SESSION['CLI']['cli_complemento'] = $cli_complemento;

            $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} alterou os seguintes dados {$cli_cep}, {$cli_endereco}, {$cli_numero}, {$cli_bairro}, {$cli_cidade}, {$cli_uf}, {$cli_complemento}";
            $log->getLogger($msg, "conta");

            echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
                    <h4>Dados atualizados com sucesso.<h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>' . Rotas::redirecionar(1, Rotas::pagMeuPerfil());
            
        } else {
            $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} alterou os seguintes dados {$cli_cep}, {$cli_endereco}, {$cli_numero}, {$cli_bairro}, {$cli_cidade}, {$cli_uf}, {$cli_complemento}";
            $log->getLogger($msg, "conta");

            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                    <h4>Erro ao atualizar os dados.<h4>
                    <p>Tente novamente.</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>' . Rotas::redirecionar(1, Rotas::pagMeuPerfil());
            // exit();
        }
    }

    //ADICIONAR NOVO ENDEREÇO
    if (isset($_POST['novo_cli_endereco']) && isset($_POST['novo_cli_bairro']) && isset($_POST['novo_cli_cidade'])) {

        $cep = str_replace("-", "", $_POST['novo_cli_cep']);
        $endereco = $_POST['novo_cli_endereco'];
        $bairro = $_POST['novo_cli_bairro'];
        $cidade = $_POST['novo_cli_cidade'];
        $uf = $_POST['novo_cli_uf'];
        $numero = $_POST['novo_cli_numero'];
        $complemento = $_POST['novo_cli_complemento'];

        //CHAMAR A FUNÇÃO PARA PREPARAR OS DADOS
        $cliente->prepararEditarEndereco(
            $cep,
            $endereco,
            $numero,
            $bairro,
            $cidade,
            $uf,
            $complemento
        );

        if ($novo_endereco->gravarEndereco($cep, $endereco, $bairro, $cidade, $uf, $numero, $complemento, $id)) {
            $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} adicionou um novo endereço {$cep}, {$endereco}, {$numero}, {$bairro}, {$cidade}, {$uf}, {$complemento}";
            $log->getLogger($msg, "conta");
            echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
                    <h4>Endereço adicionado com sucesso.<h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>' . Rotas::redirecionar(1, Rotas::pagMeuPerfil());
        } else {
            $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} tentou adicionar um novo endereço {$cep}, {$endereco}, {$numero}, {$bairro}, {$cidade}, {$uf}, {$complemento}";
            $log->getLogger($msg, "conta");
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Erro ao adicionar novo endereço.<h4>
            <p>Tente novamente.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>' . Rotas::redirecionar(1, Rotas::pagMeuPerfil());
        }

    }

    //EDITAR NOVO ENDEREÇO
    if (isset($_POST['endereco_cli_endereco']) && isset($_POST['endereco_cli_bairro']) && isset($_POST['endereco_cli_cidade'])) {
        $cep = str_replace("-", "", $_POST['endereco_cli_cep']);
        $endereco = $_POST['endereco_cli_endereco'];
        $bairro = $_POST['endereco_cli_bairro'];
        $cidade = $_POST['endereco_cli_cidade'];
        $uf = $_POST['endereco_cli_uf'];
        $numero = $_POST['endereco_cli_numero'];
        $complemento = $_POST['endereco_cli_complemento'];
        $id = $_POST['endereco_id'];

        if ($novo_endereco->atualizarEndereco($cep, $endereco, $bairro, $cidade, $uf, $numero, $complemento, $id)) {
            $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} editou o endereço {$cep}, {$endereco}, {$numero}, {$bairro}, {$cidade}, {$uf}, {$complemento} no id {$id}";
            $log->getLogger($msg, "conta");
            echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
                    <h4>Endereço atualizado com sucesso.<h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>' . Rotas::redirecionar(1, Rotas::pagMeuPerfil());
            // exit();
        } else {
            $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} tentou editar o endereço {$cep}, {$endereco}, {$numero}, {$bairro}, {$cidade}, {$uf}, {$complemento} no id {$id}";
            $log->getLogger($msg, "conta");
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Erro ao editar endereço.<h4>
            <p>Tente novamente.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>' . Rotas::redirecionar(1, Rotas::pagMeuPerfil());
            // exit();
        }

    }

    //Deletar Endereço
    if(isset($_POST['deletar_outro_endereco'])){
        $id = $_POST['deletar_outro_endereco'];
        
        if($novo_endereco->deletarEndereco($id)){
            $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} deletou o endereço do id {$id}";
            $log->getLogger($msg, "conta");
            echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
                    <h4>Endereço deletado com sucesso.<h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>' . Rotas::redirecionar(1, Rotas::pagMeuPerfil());
        }else {
            $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} erro ao deletar endereço do id {$id}";
            $log->getLogger($msg, "conta");
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
            <h4>Erro ao deletar endereço.<h4>
            <p>Tente novamente.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>' . Rotas::redirecionar(1, Rotas::pagMeuPerfil());
            // exit();
        }
    }

    //CONSULTA NOVO ENDEREÇO
    $novo_endereco->enderecoCliente($id);

    $smarty->assign('ENDERECO', $novo_endereco->getItens());
    $smarty->assign('TOTAL_ENDERECO', $novo_endereco->totalDados());

    //Cria os assigns da sessao ativa do cliente
    foreach ($_SESSION['CLI'] as $campo => $valor) {
        $smarty->assign(strtoupper($campo), $valor);
    }
    //SESSÃO CONFIGURAÇÃO
    if (isset($_POST['cli_email']) && isset($_POST['cli_senha']) && isset($_POST['cli_nova_senha'])) {
        if ($_POST['cli_email'] === $_SESSION['CLI']['cli_email']) {
            $cliente->senhaCliente($id);
            foreach ($cliente->getItens() as $campo => $valor) {

            }

            $cli_senha = md5($_POST['cli_senha']);
            $cli_nova_senha = md5($_POST['cli_nova_senha']);

            if ($valor['cli_senha'] === $cli_senha) {
                if ($cli_nova_senha === $cli_senha) {
                    $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} tentou trocar a senha erro = A senha atual e a nova senha estão iguais : email: {$_POST['cli_email']}";
                    $log->getLogger($msg, "conta");
                    echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                    <h4>A senha atual e a nova senha estão iguais.<h4>
                    <p>Digite a sua senha novamente.</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>' . Rotas::redirecionar(3, Rotas::pagMeuPerfil());
                    exit();
                } else {
                    $cliente->senhaUpdate($cli_nova_senha, $id);
                    $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} cujo o email é {$_SESSION['CLI']['cli_email']} alterou a senha com sucesso no email digitado: {$_POST['cli_email']}";
                    $log->getLogger($msg, "conta");
                    echo '<div class="container text-center alert alert-dismissible fade show alert-success" role="alert">
                    <h4>Senha atualizada com sucesso.<h4>
                    <p>Faça login novamente.</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>' . Rotas::redirecionar(3, Rotas::pagLogout());
                    exit();
                }
            } else {
                $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} tentou alterar a senha erro = senha atual está incorreta no email digitado: {$_POST['cli_email']}";
                $log->getLogger($msg, "conta");
                echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                <h4>Senha atual está incorreta<h4>
                <p>Digite a sua senha novamente.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></div>' . Rotas::redirecionar(3, Rotas::pagMeuPerfil());
                exit();
            }

        } else {
            $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} cujo o email é {$_SESSION['CLI']['cli_email']} tentou trocar de senha erro = O endereço de email digitado é diferente do cadastrados : email digitado: {$_POST['cli_email']}";
            $log->getLogger($msg, "conta");
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                <h4>O endereço de e-mail digitado é diferente do cadastrado.<h4>
                <p>Digite seu e-mail corretamente.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></div>' . Rotas::redirecionar(3, Rotas::pagMeuPerfil());
            exit();
        }
    }
    //EXCLUIR CONTA
    if (isset($_POST['confirmar']) && $id != null && !empty($id)) {
        if ($cliente->excluirCliente($id)) {
            $msg = "Usuario {$_SESSION['CLI']['cli_nome']} {$_SESSION['CLI']['cli_sobrenome']} cujo o email é {$_SESSION['CLI']['cli_email']} excluiu a conta de cadastro.";
            $log->getLogger($msg, "conta");
            echo '<div class="container text-center alert alert-dismissible fade show alert-warning" role="alert">
                <h4>Conta excluída com sucesso.<h4>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></div>' . Rotas::redirecionar(3, Rotas::pagLogout());
            exit();
        } else {
            echo '<div class="container text-center alert alert-dismissible fade show alert-danger" role="alert">
                <h4>Erro ao tentar excluir a conta.<h4>
                <p>Tentar novamente.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></div>' . Rotas::redirecionar(3, Rotas::pagMeuPerfil());
            exit();
        }
    }

    $smarty->assign('DATA_CAD', Sistema::formatarData($_SESSION['CLI']['cli_data_cad']));
    $smarty->assign('PEDIDOS', $pedidos->getItens());
    $smarty->assign('PAG_DETALHES_PEDIDOS', Rotas::pagDetalhesPedido());
    $smarty->assign('PAG_HOME', Rotas::getSiteHome());
    $smarty->assign('PAG_LOGOUT', Rotas::pagLogout());
    $smarty->assign('PAGINACAO', $pedidos->mostrarPaginacao());

    $smarty->display('meu-perfil.tpl');

} else {
    exit(Rotas::redirecionar(0, Rotas::pagLogin()));
}
