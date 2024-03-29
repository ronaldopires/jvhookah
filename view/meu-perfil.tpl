<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <span>Meu Perfil</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<!-- Tabs Profile -->
<section class="page-profile my-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand d-sm-block d-md-none minha_conta" href="#">Minha Conta</a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#menu_perfil" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menu_perfil">
                        <div class="nav w-100 flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link account">Minha Conta</a>
                            <a class="nav-link active" id="historico-pedidos-tab" data-toggle="pill" href="#historico-pedidos" role="tab" aria-controls="historico-pedidos" aria-selected="false">
                                <i class="icon_bag_alt mr-2"></i> Histórico de Pedidos</a>
                            <a class="nav-link" id="dados-pessoais-tab" data-toggle="pill" href="#dados-pessoais" role="tab" aria-controls="dados-pessoais" aria-selected="true"> <i class="ti-user mr-2"></i> Dados Pessoais</a>
                            <a class="nav-link" id="enderecos-tab" data-toggle="pill" href="#enderecos" role="tab" aria-controls="enderecos" aria-selected="false"><i class="ti-map-alt mr-2"></i>
                                Endereços</a>
                            <a class="nav-link" id="configuracoes-tab" data-toggle="pill" href="#configuracoes" role="tab" aria-controls="configuracoes" aria-selected="false">
                                <i class="ti-settings mr-2"></i> Configurações</a>
                            <a class="nav-link" href="{$PAG_LOGOUT}"><i class="ti-power-off mr-2"></i> Sair</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 p-3 border tab-cli">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="historico-pedidos" role="tabpanel" aria-labelledby="historico-pedidos-tab">
                        <h4 class="text-center">HISTÓRICO DE PEDIDOS</h4>
                        <hr> {if $TOTAL_PEDIDO == 0}
                        <div class="text-center">
                            <h4 class="mb-3">Você não possuí pedidos</h4>
                            <p>Clique no botão para verificar nossos produtos.</p>
                            <a href="produtos" type="button" class="site-btn-info">Escolher produtos</a>
                        </div>
                        {else}
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Data</th>
                                        <th scope="col">Hora</th>
                                        <th scope="col" class="d-xs-none">Ref</th>
                                        <th scope="col" colspan="2">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="tabela-cli">
                                    {foreach from=$PEDIDOS item=P}
                                    <tr>
                                        <th class="align-middle" scope="row">{$P.ped_data} </th>
                                        <td class="align-middle">{$P.ped_hora}</td>
                                        <td class="align-middle d-xs-none">{$P.ped_ref}</td>
                                        <td class="align-middle">{$P.ped_pag_status}</td>
                                        <td>
                                            <form method="POST" action="{$PAG_DETALHES_PEDIDOS}">
                                                <input type="hidden" name="cod_pedido" value="{$P.ped_cod}">
                                                <button type="submit" class="site-btn-info">Detalhes</button>
                                            </form>
                                        </td>
                                    </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        </div>
                        <div class="col">
                            {$PAGINACAO}
                        </div>
                        {/if}
                    </div>
                    <div class="tab-pane fade" id="dados-pessoais" role="tabpanel" aria-labelledby="dados-pessoais-tab">
                        <h4 class="text-center">DADOS PESSOAIS</h4>
                        <hr>
                        <div class="row no-gutters">
                            <div class="col-12 register-form">
                                <form method="POST">
                                    <div class="form-row">
                                        <div class="form-group group-input col-md-6">
                                            <label for="cli_nome">Nome</label>
                                            <input type="text" name="cli_nome" class="form-control activeReandonly" id="cli_nome" value="{$CLI_NOME}" readonly required>
                                        </div>
                                        <div class="form-group group-input col-md-6">
                                            <label for="cli_sobrenome">Sobrenome</label>
                                            <input type="text" name="cli_sobrenome" class="form-control activeReandonly" id="cli_sobrenome" value="{$CLI_SOBRENOME}" readonly required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group group-input col-md-6">
                                            <label for="cli_cpf">CPF</label>
                                            <input type="text" class="form-control" name="cli_cpf" id="cli_cpf" value="{$CLI_CPF}" readonly disabled>
                                        </div>
                                        <div class="form-group group-input col-md-6">
                                            <label for="cli_data_nasc">Data de Nascimento</label>
                                            <input type="date" class="form-control activeReandonly" name="cli_data_nasc" id="cli_data_nasc" value="{$CLI_DATA_NASC}" readonly required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group group-input col-md-6">
                                            <label for="cli_sexo">Sexo</label>
                                            <select class="form-control activeReandonly" name="cli_sexo" id="cli_sexo" readonly required>
                                                {if {$CLI_SEXO} == f}
                                                <option value="f" selected>Feminino</option>
                                                <option value="m">Masculino</option>
                                                {else}
                                                <option value="m" selected>Masculino</option>
                                                <option value="f" >Feminino</option>
                                                {/if}
                                            </select>
                                        </div>
                                        <div class="form-group group-input col-md-3">
                                            <label for="cli_celular">Celular</label>
                                            <input type="text" class="form-control activeReandonly" name="cli_celular" id="cli_celular" value="{$CLI_CELULAR}" readonly required>
                                        </div>
                                        <div class="form-group group-input col-md-3">
                                            <label for="cli_telefone">Telefone</label>
                                            <input type="text" class="form-control activeReandonly" name="cli_telefone" id="cli_telefone" value="{$CLI_TELEFONE}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row justify-content-end">
                                        <button type="button" id="btnEditarDadosCli" class="site-btn col-2">Editar</button>
                                    </div>
                                    <div class="form-row justify-content-center py-3" id="divBtnSave">
                                        <div class="col">
                                            <button id="btnSaveDadosCli" class="site-btn btn-block">Salvar</button>
                                        </div>
                                        <div class="col">
                                            <button id="btnCancelDadosCli" type="reset" class="site-btn-danger btn-block">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="enderecos" role="tabpanel" aria-labelledby="enderecos-tab">
                        <h4 class="text-center">ENDEREÇOS</h4>
                        <hr>
                        <!--Card address-->
                        <div class="card-deck">
                            <div class="col-12 mb-3 p-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Principal</h5>
                                        <p class="card-text">{$CLI_ENDERECO}, {$CLI_NUMERO}</p>
                                        <p class="card-text"><strong>Bairro:</strong> {$CLI_BAIRRO} <strong>CEP:</strong> {$CLI_CEP}</p>
                                        <p class="card-text"><strong>Cidade:</strong> {$CLI_CIDADE}, <strong>Estado:</strong> {$CLI_UF} - <strong>Complemento:</strong> {$CLI_COMPLEMENTO}</p>
                                        <div class="row">
                                            <div class="col">
                                                <button type="button" class="site-btn btn-block" data-toggle="modal" data-target="#editAddress">Editar</button>
                                                <!-- <a href="#" class="site-btn-danger">Deletar</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Address-->
                                    <div class="modal fade" id="editAddress" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalAddress" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content register-form">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalAddress">Editar Endereço de Entrega</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form method="POST" id="formEditarEndereco">
                                                    <div class="modal-body">
                                                        <div class="col">
                                                            <div class="form-row">
                                                                <div class="form-group group-input col-md-12">
                                                                    <label for="cli_endereco">Rua</label>
                                                                    <input type="text" name="cli_endereco" class="form-control" id="cli_endereco" value="{$CLI_ENDERECO}" required>
                                                                </div>
                                                                <div class="form-group group-input col-md-12">
                                                                    <label for="cli_bairro">Bairro</label>
                                                                    <input type="text" name="cli_bairro" class="form-control" id="cli_bairro" value="{$CLI_BAIRRO}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group group-input col-md-6">
                                                                    <label for="cli_numero">Número</label>
                                                                    <input type="text" class="form-control" name="cli_numero" id="cli_numero" value="{$CLI_NUMERO}" required>
                                                                </div>
                                                                <div class="form-group group-input col-md-6">
                                                                    <label for="cli_cep">CEP</label>
                                                                    <input type="text" class="form-control" name="cli_cep" id="cli_cep" value="{$CLI_CEP}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group group-input col-md-6">
                                                                    <label for="cli_cidade">Cidade</label>
                                                                    <input type="text" class="form-control" name="cli_cidade" id="cli_cidade" value="{$CLI_CIDADE}" required>
                                                                </div>
                                                                <div class="form-group group-input col-md-6">
                                                                    <label for="cli_uf">Estado</label>
                                                                    <select class="form-control" name="cli_uf" id="cli_uf" required>
                                                                        {if $CLI_UF == AC}
                                                                        <option value="AC"selected>Acre</option>
                                                                        {else if $CLI_UF == AL}
                                                                        <option value="AL"selected>Alagoas</option>
                                                                        {else if $CLI_UF == AP}
                                                                        <option value="AP"selected>Amapá</option>
                                                                        {else if $CLI_UF == AM}
                                                                        <option value="AM"selected>Amazonas</option>
                                                                        {else if $CLI_UF == BA}
                                                                        <option value="BA"selected>Bahia</option>
                                                                        {else if $CLI_UF == CE}
                                                                        <option value="CE"selected>Ceará</option>
                                                                        {else if $CLI_UF == DF}
                                                                        <option value="DF"selected>Distrito Federal</option>
                                                                        {else if $CLI_UF == ES}
                                                                        <option value="ES"selected>Espírito Santo</option>
                                                                        {else if $CLI_UF == GO}
                                                                        <option value="GO"selected>Goiás</option>
                                                                        {else if $CLI_UF == MA}
                                                                        <option value="MA"selected>Maranhão</option>
                                                                        {else if $CLI_UF == MT}
                                                                        <option value="MT"selected>Mato Grosso</option>
                                                                        {else if $CLI_UF == MS}
                                                                        <option value="MS"selected>Mato Grosso do Sul</option>
                                                                        {else if $CLI_UF == MG}
                                                                        <option value="MG"selected>Minas Gerais</option>
                                                                        {else if $CLI_UF == PA}
                                                                        <option value="PA"selected>Pará</option>
                                                                        {else if $CLI_UF == PB}
                                                                        <option value="PB"selected>Paraíba</option>
                                                                        {else if $CLI_UF == PR}
                                                                        <option value="PR"selected>Paraná</option>
                                                                        {else if $CLI_UF == PE}
                                                                        <option value="PE"selected>Pernambuco</option>
                                                                        {else if $CLI_UF == PI}
                                                                        <option value="PI"selected>Piauí</option>
                                                                        {else if $CLI_UF == RJ}
                                                                        <option value="RJ"selected>Rio de Janeiro</option>
                                                                        {else if $CLI_UF == RN}
                                                                        <option value="RN"selected>Rio Grande do Norte</option>
                                                                        {else if $CLI_UF == RS}
                                                                        <option value="RS"selected>Rio Grande do Sul</option>
                                                                        {else if $CLI_UF == RO}
                                                                        <option value="RO"selected>Rondônia</option>
                                                                        {else if $CLI_UF == RR}
                                                                        <option value="RR"selected>Roraima</option>
                                                                        {else if $CLI_UF == SC}
                                                                        <option value="SC"selected>Santa Catarina</option>
                                                                        {else if $CLI_UF == SP}
                                                                        <option value="SP"selected>São Paulo</option>
                                                                        {else if $CLI_UF == SE}
                                                                        <option value="SE"selected>Sergipe</option>
                                                                        {else if $CLI_UF == TO}
                                                                        <option value="TO"selected>Tocantins</option>
                                                                        {else if $CLI_UF == EX}
                                                                        <option value="EX"selected>Estrangeiro</option>
                                                                        {/if}
                                                                        <option value="AC">Acre</option>
                                                                        <option value="AL">Alagoas</option>
                                                                        <option value="AP">Amapá</option>
                                                                        <option value="AM">Amazonas</option>
                                                                        <option value="BA">Bahia</option>
                                                                        <option value="CE">Ceará</option>
                                                                        <option value="DF">Distrito Federal</option>
                                                                        <option value="ES">Espírito Santo</option>
                                                                        <option value="GO">Goiás</option>
                                                                        <option value="MA">Maranhão</option>
                                                                        <option value="MT">Mato Grosso</option>
                                                                        <option value="MS">Mato Grosso do Sul</option>
                                                                        <option value="MG">Minas Gerais</option>
                                                                        <option value="PA">Pará</option>
                                                                        <option value="PB">Paraíba</option>
                                                                        <option value="PR">Paraná</option>
                                                                        <option value="PE">Pernambuco</option>
                                                                        <option value="PI">Piauí</option>
                                                                        <option value="RJ">Rio de Janeiro</option>
                                                                        <option value="RN">Rio Grande do Norte</option>
                                                                        <option value="RS">Rio Grande do Sul</option>
                                                                        <option value="RO">Rondônia</option>
                                                                        <option value="RR">Roraima</option>
                                                                        <option value="SC">Santa Catarina</option>
                                                                        <option value="SP">São Paulo</option>
                                                                        <option value="SE">Sergipe</option>
                                                                        <option value="TO">Tocantins</option>
                                                                        <option value="EX">Estrangeiro</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group group-input col-md-12">
                                                                    <label for="cli_complemento">Complemento</label>
                                                                    <input type="text" class="form-control" name="cli_complemento" id="cli_complemento" value="{$CLI_COMPLEMENTO}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="site-btn">Salvar</button>
                                                        <button type="reset" class="site-btn-danger" data-dismiss="modal">Cancelar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {if $TOTAL_ENDERECO > 0} {foreach $ENDERECO item=E}
                            <div class="col-lg-6 col-md-12 col-sm-12 p-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Outro Endereço</h5>
                                        <p class="card-text">{$E.endereco_cli_endereco}, {$E.endereco_cli_numero}</p>
                                        <p class="card-text"><strong>Bairro:</strong> {$E.endereco_cli_bairro} <strong>CEP:</strong> {$E.endereco_cli_cep}</p>
                                        <p class="card-text"><strong>Cidade:</strong> {$E.endereco_cli_cidade}, <strong>Estado:</strong> {$E.endereco_cli_uf} - <strong>Complemento:</strong> {$E.endereco_cli_complemento}</p>
                                        <button type="button" class="site-btn btn-block mb-3" data-toggle="modal" data-target="#endereco{$E.endereco_id}">
                                            <i class="ti-pencil-alt mr-2"></i> Editar
                                          </button>
                                        <button class="site-btn-danger btn-block" type="button" data-toggle="modal" data-target="#deletar{$E.endereco_id}"><i class="ti-trash mr-2"></i>Deletar</button>
                                        <div class="modal fade" id="deletar{$E.endereco_id}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalOthersAddress" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content register-form">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalOthersAddress">Deletar Endereço de Entrega</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col">
                                                            <p>Você deseja deletar esse endereço?</p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="POST">
                                                            <input type="hidden" name="deletar_outro_endereco" value="{$E.endereco_id}">
                                                            <button class="site-btn-danger">Deletar</button>
                                                        </form>
                                                        <button class="site-btn" data-dismiss="modal">Cancelar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal others Address-->
                                    <div class="modal fade" id="endereco{$E.endereco_id}" tabindex="-1" role="dialog" aria-labelledby="modalOthersAddress" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content register-form">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalOthersAddress">Editar Endereço de Entrega</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form method="POST" class="formEditarOutroEndereco">
                                                    <div class="modal-body">
                                                        <div class="col">
                                                            <div class="form-row">
                                                                <div class="form-group group-input col-md-12">
                                                                    <input type="hidden" name="endereco_id" value="{$E.endereco_id}">
                                                                    <label for="endereco_cli_endereco">Rua</label>
                                                                    <input type="text" name="endereco_cli_endereco" class="form-control" value="{$E.endereco_cli_endereco}" required>
                                                                </div>
                                                                <div class="form-group group-input col-md-12">
                                                                    <label for="endereco_cli_bairro">Bairro</label>
                                                                    <input type="text" name="endereco_cli_bairro" class="form-control" value="{$E.endereco_cli_bairro}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group group-input col-md-6">
                                                                    <label for="endereco_cli_numero">Número</label>
                                                                    <input type="text" class="form-control" name="endereco_cli_numero" value="{$E.endereco_cli_numero}" required>
                                                                </div>
                                                                <div class="form-group group-input col-md-6">
                                                                    <label for="endereco_cli_cep">CEP</label>
                                                                    <input type="text" class="form-control" name="endereco_cli_cep" value="{$E.endereco_cli_cep}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group group-input col-md-6">
                                                                    <label for="endereco_cli_cidade">Cidade</label>
                                                                    <input type="text" class="form-control" name="endereco_cli_cidade" value="{$E.endereco_cli_cidade}" required>
                                                                </div>
                                                                <div class="form-group group-input col-md-6">
                                                                    <label for="endereco_cli_uf">Estado</label>
                                                                    <select class="form-control" name="endereco_cli_uf" required>
                                                                        {if $CLI_UF == AC}
                                                                        <option value="AC"selected>Acre</option>
                                                                        {else if $CLI_UF == AL}
                                                                        <option value="AL"selected>Alagoas</option>
                                                                        {else if $CLI_UF == AP}
                                                                        <option value="AP"selected>Amapá</option>
                                                                        {else if $CLI_UF == AM}
                                                                        <option value="AM"selected>Amazonas</option>
                                                                        {else if $CLI_UF == BA}
                                                                        <option value="BA"selected>Bahia</option>
                                                                        {else if $CLI_UF == CE}
                                                                        <option value="CE"selected>Ceará</option>
                                                                        {else if $CLI_UF == DF}
                                                                        <option value="DF"selected>Distrito Federal</option>
                                                                        {else if $CLI_UF == ES}
                                                                        <option value="ES"selected>Espírito Santo</option>
                                                                        {else if $CLI_UF == GO}
                                                                        <option value="GO"selected>Goiás</option>
                                                                        {else if $CLI_UF == MA}
                                                                        <option value="MA"selected>Maranhão</option>
                                                                        {else if $CLI_UF == MT}
                                                                        <option value="MT"selected>Mato Grosso</option>
                                                                        {else if $CLI_UF == MS}
                                                                        <option value="MS"selected>Mato Grosso do Sul</option>
                                                                        {else if $CLI_UF == MG}
                                                                        <option value="MG"selected>Minas Gerais</option>
                                                                        {else if $CLI_UF == PA}
                                                                        <option value="PA"selected>Pará</option>
                                                                        {else if $CLI_UF == PB}
                                                                        <option value="PB"selected>Paraíba</option>
                                                                        {else if $CLI_UF == PR}
                                                                        <option value="PR"selected>Paraná</option>
                                                                        {else if $CLI_UF == PE}
                                                                        <option value="PE"selected>Pernambuco</option>
                                                                        {else if $CLI_UF == PI}
                                                                        <option value="PI"selected>Piauí</option>
                                                                        {else if $CLI_UF == RJ}
                                                                        <option value="RJ"selected>Rio de Janeiro</option>
                                                                        {else if $CLI_UF == RN}
                                                                        <option value="RN"selected>Rio Grande do Norte</option>
                                                                        {else if $CLI_UF == RS}
                                                                        <option value="RS"selected>Rio Grande do Sul</option>
                                                                        {else if $CLI_UF == RO}
                                                                        <option value="RO"selected>Rondônia</option>
                                                                        {else if $CLI_UF == RR}
                                                                        <option value="RR"selected>Roraima</option>
                                                                        {else if $CLI_UF == SC}
                                                                        <option value="SC"selected>Santa Catarina</option>
                                                                        {else if $CLI_UF == SP}
                                                                        <option value="SP"selected>São Paulo</option>
                                                                        {else if $CLI_UF == SE}
                                                                        <option value="SE"selected>Sergipe</option>
                                                                        {else if $CLI_UF == TO}
                                                                        <option value="TO"selected>Tocantins</option>
                                                                        {else if $CLI_UF == EX}
                                                                        <option value="EX"selected>Estrangeiro</option>
                                                                        {/if}
                                                                        <option value="AC">Acre</option>
                                                                        <option value="AL">Alagoas</option>
                                                                        <option value="AP">Amapá</option>
                                                                        <option value="AM">Amazonas</option>
                                                                        <option value="BA">Bahia</option>
                                                                        <option value="CE">Ceará</option>
                                                                        <option value="DF">Distrito Federal</option>
                                                                        <option value="ES">Espírito Santo</option>
                                                                        <option value="GO">Goiás</option>
                                                                        <option value="MA">Maranhão</option>
                                                                        <option value="MT">Mato Grosso</option>
                                                                        <option value="MS">Mato Grosso do Sul</option>
                                                                        <option value="MG">Minas Gerais</option>
                                                                        <option value="PA">Pará</option>
                                                                        <option value="PB">Paraíba</option>
                                                                        <option value="PR">Paraná</option>
                                                                        <option value="PE">Pernambuco</option>
                                                                        <option value="PI">Piauí</option>
                                                                        <option value="RJ">Rio de Janeiro</option>
                                                                        <option value="RN">Rio Grande do Norte</option>
                                                                        <option value="RS">Rio Grande do Sul</option>
                                                                        <option value="RO">Rondônia</option>
                                                                        <option value="RR">Roraima</option>
                                                                        <option value="SC">Santa Catarina</option>
                                                                        <option value="SP">São Paulo</option>
                                                                        <option value="SE">Sergipe</option>
                                                                        <option value="TO">Tocantins</option>
                                                                        <option value="EX">Estrangeiro</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group group-input col-md-12">
                                                                    <label for="endereco_cli_complemento">Complemento</label>
                                                                    <input type="text" class="form-control" name="endereco_cli_complemento" value="{$E.endereco_cli_complemento}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="site-btn">Salvar</button>
                                                        <button type="reset" class="site-btn-danger" data-dismiss="modal">Cancelar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {/foreach} {/if}
                        </div>
                        <div class="row no-gutters pt-3">
                            <div class="col-12">
                                <button class="site-btn-success" data-toggle="modal" data-target="#NewModalAddress">Adicionar Endereço</button>
                                <!-- Modal Address-->
                                <div class="modal fade" id="NewModalAddress" tabindex="-1" role="dialog" aria-labelledby="modalNewAddress" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content register-form">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalNewAddress">Adicionar Endereço</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form method="POST" id="formNovoEndereco">
                                                <div class="modal-body">
                                                    <div class="col">
                                                        <div class="form-row">
                                                            <div class="form-group group-input col-md-12">
                                                                <label for="novo_cli_endereco">Rua</label>
                                                                <input type="text" name="novo_cli_endereco" class="form-control" id="novo_cli_endereco" required>
                                                            </div>
                                                            <div class="form-group group-input col-md-12">
                                                                <label for="novo_cli_bairro">Bairro</label>
                                                                <input type="text" name="novo_cli_bairro" class="form-control" id="novo_cli_bairro" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group group-input col-md-6">
                                                                <label for="novo_cli_numero">Número</label>
                                                                <input type="text" class="form-control" name="novo_cli_numero" id="novo_cli_numero" required>
                                                            </div>
                                                            <div class="form-group group-input col-md-6">
                                                                <label for="novo_cli_cep">CEP</label>
                                                                <input type="text" class="form-control" name="novo_cli_cep" id="novo_cli_cep" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group group-input col-md-6">
                                                                <label for="novo_cli_cidade">Cidade</label>
                                                                <input type="text" class="form-control" name="novo_cli_cidade" id="novo_cli_cidade" required>
                                                            </div>
                                                            <div class="form-group group-input col-md-6">
                                                                <label for="novo_cli_uf">Estado</label>
                                                                <select class="form-control" name="novo_cli_uf" id="novo_cli_uf" required>
                                                                    <option value="AC">Acre</option>
                                                                    <option value="AL">Alagoas</option>
                                                                    <option value="AP">Amapá</option>
                                                                    <option value="AM">Amazonas</option>
                                                                    <option value="BA">Bahia</option>
                                                                    <option value="CE">Ceará</option>
                                                                    <option value="DF">Distrito Federal</option>
                                                                    <option value="ES">Espírito Santo</option>
                                                                    <option value="GO">Goiás</option>
                                                                    <option value="MA">Maranhão</option>
                                                                    <option value="MT">Mato Grosso</option>
                                                                    <option value="MS">Mato Grosso do Sul</option>
                                                                    <option value="MG">Minas Gerais</option>
                                                                    <option value="PA">Pará</option>
                                                                    <option value="PB">Paraíba</option>
                                                                    <option value="PR">Paraná</option>
                                                                    <option value="PE">Pernambuco</option>
                                                                    <option value="PI">Piauí</option>
                                                                    <option value="RJ">Rio de Janeiro</option>
                                                                    <option value="RN">Rio Grande do Norte</option>
                                                                    <option value="RS">Rio Grande do Sul</option>
                                                                    <option value="RO">Rondônia</option>
                                                                    <option value="RR">Roraima</option>
                                                                    <option value="SC">Santa Catarina</option>
                                                                    <option value="SP">São Paulo</option>
                                                                    <option value="SE">Sergipe</option>
                                                                    <option value="TO">Tocantins</option>
                                                                    <option value="EX">Estrangeiro</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group group-input col-md-12">
                                                                <label for="novo_cli_complemento">Complemento</label>
                                                                <input type="text" class="form-control" name="novo_cli_complemento" id="novo_cli_complemento">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="site-btn">Salvar</button>
                                                    <button type="reset" class="site-btn-danger" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="configuracoes" role="tabpanel" aria-labelledby="configuracoes-tab">
                        <h4 class="text-center">MINHAS CONFIGURAÇÕES</h4>
                        <hr>
                        <div class="row no-gutters">
                            <div class="col-12 text-right">
                                <p>Cliente desde: {$DATA_CAD}</p>
                            </div>
                            <div class="col-12 p-0">
                                <div class="col-lg-12 col-md-12 col-sm-auto p-0">
                                    <button id="btnAlterarSenha" class="site-btn col-sm-5">Alterar Senha</button>
                                    <div class="col-auto mt-3" id="divAlterarSenha">
                                        <div class="login-form">
                                            <h2 class="h4">Alterar Senha</h2>
                                            <form method="POST">
                                                <div class="form-row">
                                                    <div class="form-group group-input col-md-6">
                                                        <label for="cli_email">E-mail</label>
                                                        <input type="email" name="cli_email" class="form-control" id="cli_email" required>
                                                    </div>
                                                    <div class="form-group group-input col-md-6">
                                                        <label for="cli_senha">Senha Atual</label>
                                                        <input type="password" name="cli_senha" class="form-control" id="cli_senha" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group group-input col-md-6">
                                                        <label for="cli_nova_senha">Nova Senha</label>
                                                        <input type="password" name="cli_nova_senha" class="form-control" id="cli_nova_senha" required>
                                                    </div>
                                                    <div class="form-group group-input col-md-6">
                                                        <label for="cli_con_nova_senha">Confirme a nova senha</label>
                                                        <input type="password" name="cli_con_nova_senha" class="form-control" id="cli_con_nova_senha" required>
                                                    </div>
                                                </div>
                                                <div class="form-row justify-content-center">
                                                    <div class="form-group col-md-6">
                                                        <button type="submit" class="site-btn login-btn">Alterar Senha</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-auto py-4 p-0">
                                    <button type="button" class="site-btn-danger col-sm-5" data-toggle="modal" data-target="#modalExcluirConta">Excluir Conta</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalExcluirConta" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="TituloModalCentralizado">Excluir Conta</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <p class="text-danger">Você deseja <strong>EXCLUIR</strong> sua conta permanentemente?</p>
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <form class="form-row col-12" action="" method="POST">
                                                        <div class="col">
                                                            <button type="submit" class="site-btn-danger" name="confirmar">Excluir</button>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button" class="site-btn" data-dismiss="modal">Cancelar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>