<?php
/* Smarty version 3.1.36, created on 2020-05-26 17:25:12
  from 'C:\xampp\htdocs\jvhookah\view\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ecd7b28a87479_39217354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '610b14de3f4952108b48a3faec480ab490fa26b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\profile.tpl',
      1 => 1590524711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecd7b28a87479_39217354 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
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
        <div class="row no-gutters">
            <div class="mr-lg-3 col-sm-12 col-md-12 col-lg-auto">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand d-lg-none" href="#">Minha Conta</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-profile" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menu-profile">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link account">Minha Conta</a>
                            <a class="nav-link active" id="historico-pedidos-tab" data-toggle="pill" href="#historico-pedidos" role="tab" aria-controls="historico-pedidos" aria-selected="false">
                                <i class="icon_bag_alt mr-2"></i> Histórico de Pedidos</a>
                            <a class="nav-link" id="dados-pessoais-tab" data-toggle="pill" href="#dados-pessoais" role="tab" aria-controls="dados-pessoais" aria-selected="true"> <i class="ti-user mr-2"></i> Dados Pessoais</a>
                            <a class="nav-link" id="enderecos-tab" data-toggle="pill" href="#enderecos" role="tab" aria-controls="enderecos" aria-selected="false"><i class="ti-map-alt mr-2"></i>
                                Endereços</a>
                            <a class="nav-link" id="configuracoes-tab" data-toggle="pill" href="#configuracoes" role="tab" aria-controls="configuracoes" aria-selected="false">
                                <i class="ti-settings mr-2"></i> Configurações</a>
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['LOGOFF']->value;?>
">Sair</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col p-3 border">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="historico-pedidos" role="tabpanel" aria-labelledby="historico-pedidos-tab">
                        <h4 class="text-center">HISTÓRICO DE PEDIDOS</h4>
                        <hr> <?php if ($_smarty_tpl->tpl_vars['TOTAL_PEDIDO']->value == 0) {?>
                        <div class="col-auto text-center">
                            <h4 class="mb-3">Você não possuí pedidos</h4>
                            <p>Clique no botão para verificar nossos produtos.
                                <p>
                                    <a href="produtos" type="button" class="btn btn-outline-info">Escolher produtos</a>
                        </div>
                        <?php } else { ?>
                        <div class="col table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Data</th>
                                        <th scope="col">Hora</th>
                                        <th scope="col">Ref</th>
                                        <th scope="col" colspan="2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                                    <tr>
                                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
 </th>
                                        <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>
                                        <td>Aguardando Pagamento</td>
                                        <td>
                                            <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['DETALHES_PEDIDOS']->value;?>
">
                                                <input type="hidden" name="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="ti-menu mr-2"></i> Detalhes
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                        <?php }?>
                    </div>
                    <div class="tab-pane fade" id="dados-pessoais" role="tabpanel" aria-labelledby="dados-pessoais-tab">
                        <h4 class="text-center">DADOS PESSOAIS</h4>
                        <hr>
                        <div class="row no-gutters">
                            <div class="col-12">
                                <form method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="cli_nome">Nome</label>
                                            <input type="text" name="cli_nome" class="form-control activeReandonly" id="cli_nome" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="cli_sobrenome">Sobrenome</label>
                                            <input type="text" name="cli_sobrenome" class="form-control activeReandonly" id="cli_sobrenome" value="<?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>
" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="cli_cpf">CPF</label>
                                            <input type="text" class="form-control" name="cli_cpf" id="cli_cpf" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CPF']->value;?>
" readonly disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="cli_data_nasc">Data de Nascimento</label>
                                            <input type="date" class="form-control activeReandonly" name="cli_data_nasc" id="cli_data_nasc" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DATA_NASC']->value;?>
" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="cli_sexo">Sexo</label>
                                            <select class="form-control activeReandonly" name="cli_sexo" id="cli_sexo" readonly>
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['CLI_SEXO']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 'f') {?>
                                                <option value="f" selected>Feminino</option>
                                                <option value="m">Masculino</option>
                                                <?php } else { ?>
                                                <option value="m" selected>Masculino</option>
                                                <option value="f" >Feminino</option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="cli_celular">Celular</label>
                                            <input type="text" class="form-control activeReandonly" name="cli_celular" id="cli_celular" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" readonly>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="cli_telefone">Telefone</label>
                                            <input type="text" class="form-control activeReandonly" name="cli_telefone" id="cli_telefone" value="<?php echo $_smarty_tpl->tpl_vars['CLI_TELEFONE']->value;?>
" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row justify-content-end">
                                        <button type="button" id="btnEditarDadosCli" class="btn col-md-2 col-sm-2 border border-dark text-light" style="background-color: #e7ab3c; text-transform: uppercase; font-weight: 700;">Editar</button>
                                    </div>
                                    <div class="form-row justify-content-center py-3" id="divBtnSave">
                                        <button id="btnSaveDadosCli" class="btn btn-success col-2 mr-3">Salvar</button>
                                        <button id="btnCancelDadosCli" type="reset" class="btn btn-primary col-2">Cancelar</button>
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
                            <div class="card col-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Principal</h5>
                                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
</p>
                                    <p class="card-text"><strong>Bairro:</strong> <?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
 <strong>CEP:</strong> <?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
</p>
                                    <p class="card-text"><strong>Cidade:</strong> <?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
, <strong>Estado:</strong> <?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
 - <strong>Complemento:</strong> <?php echo $_smarty_tpl->tpl_vars['CLI_COMPLEMENTO']->value;?>
</p>
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editAddress">
                                        <i class="ti-pencil-alt mr-2"></i> Editar
                                      </button>
                                    <a href="#" class="btn btn-outline-danger"><i class="ti-trash mr-2"></i> Deletar</a>
                                </div>
                                <!-- Modal Address-->
                                <div class="modal fade" id="editAddress" tabindex="-1" role="dialog" aria-labelledby="modalAddress" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalAddress">Editar Endereço de Entrega</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form method="POST" id="formEditarEndereco">
                                                <div class="modal-body">
                                                    <div class="col">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label for="cli_endereco">Rua</label>
                                                                <input type="text" name="cli_endereco" class="form-control" id="cli_endereco" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="cli_bairro">Bairro</label>
                                                                <input type="text" name="cli_bairro" class="form-control" id="cli_bairro" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="cli_numero">Número</label>
                                                                <input type="text" class="form-control" name="cli_numero" id="cli_numero" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="cli_cep">CEP</label>
                                                                <input type="text" class="form-control" name="cli_cep" id="cli_cep" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="cli_cidade">Cidade</label>
                                                                <input type="text" class="form-control" name="cli_cidade" id="cli_cidade" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="cli_uf">Estado</label>
                                                                <select class="form-control" name="cli_uf" id="cli_uf">
                                                            <?php if ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'AC') {?>
                                                            <option value="AC"selected>Acre</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'AL') {?>
                                                            <option value="AL"selected>Alagoas</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'AP') {?>
                                                            <option value="AP"selected>Amapá</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'AM') {?>
                                                            <option value="AM"selected>Amazonas</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'BA') {?>
                                                            <option value="BA"selected>Bahia</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'CE') {?>
                                                            <option value="CE"selected>Ceará</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'DF') {?>
                                                            <option value="DF"selected>Distrito Federal</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'ES') {?>
                                                            <option value="ES"selected>Espírito Santo</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'GO') {?>
                                                            <option value="GO"selected>Goiás</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'MA') {?>
                                                            <option value="MA"selected>Maranhão</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'MT') {?>
                                                            <option value="MT"selected>Mato Grosso</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'MS') {?>
                                                            <option value="MS"selected>Mato Grosso do Sul</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'MG') {?>
                                                            <option value="MG"selected>Minas Gerais</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'PA') {?>
                                                            <option value="PA"selected>Pará</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'PB') {?>
                                                            <option value="PB"selected>Paraíba</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'PR') {?>
                                                            <option value="PR"selected>Paraná</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'PE') {?>
                                                            <option value="PE"selected>Pernambuco</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'PI') {?>
                                                            <option value="PI"selected>Piauí</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'RJ') {?>
                                                            <option value="RJ"selected>Rio de Janeiro</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'RN') {?>
                                                            <option value="RN"selected>Rio Grande do Norte</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'RS') {?>
                                                            <option value="RS"selected>Rio Grande do Sul</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'RO') {?>
                                                            <option value="RO"selected>Rondônia</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'RR') {?>
                                                            <option value="RR"selected>Roraima</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'SC') {?>
                                                            <option value="SC"selected>Santa Catarina</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'SP') {?>
                                                            <option value="SP"selected>São Paulo</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'SE') {?>
                                                            <option value="SE"selected>Sergipe</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'TO') {?>
                                                            <option value="TO"selected>Tocantins</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'EX') {?>
                                                            <option value="EX"selected>Estrangeiro</option>
                                                            <?php }?>
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
                                                            <div class="form-group col-md-12">
                                                                <label for="cli_complemento">Complemento</label>
                                                                <input type="text" class="form-control" name="cli_complemento" id="cli_complemento" value="<?php echo $_smarty_tpl->tpl_vars['CLI_COMPLEMENTO']->value;?>
">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-success">Salvar</button>
                                                    <button type="reset" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['TOTAL_ENDERECO']->value > 0) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ENDERECO']->value, 'E');
$_smarty_tpl->tpl_vars['E']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['E']->value) {
$_smarty_tpl->tpl_vars['E']->do_else = false;
?>
                            <div class="card col-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Outros Endereços</h5>
                                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['E']->value['endereco_cli_endereco'];?>
, <?php echo $_smarty_tpl->tpl_vars['E']->value['endereco_cli_numero'];?>
</p>
                                    <p class="card-text"><strong>Bairro:</strong> <?php echo $_smarty_tpl->tpl_vars['E']->value['endereco_cli_bairro'];?>
 <strong>CEP:</strong> <?php echo $_smarty_tpl->tpl_vars['E']->value['endereco_cli_cep'];?>
</p>
                                    <p class="card-text"><strong>Cidade:</strong> <?php echo $_smarty_tpl->tpl_vars['E']->value['endereco_cli_cidade'];?>
, <strong>Estado:</strong> <?php echo $_smarty_tpl->tpl_vars['E']->value['endereco_cli_uf'];?>
 - <strong>Complemento:</strong> <?php echo $_smarty_tpl->tpl_vars['E']->value['endereco_cli_complemento'];?>
</p>
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#outroEndereco">
                                        <i class="ti-pencil-alt mr-2"></i> Editar
                                      </button>
                                    <a href="#" class="btn btn-outline-danger"><i class="ti-trash mr-2"></i> Deletar</a>
                                </div>
                                <!-- Modal others Address-->
                                <div class="modal fade" id="outroEndereco" tabindex="-1" role="dialog" aria-labelledby="modalOthersAddress" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalOthersAddress">Editar Endereço de Entrega</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form method="POST" id="formEditarOutroEndereco">
                                                <div class="modal-body">
                                                    <div class="col">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label for="endereco_cli_endereco">Rua</label>
                                                                <input type="text" name="endereco_cli_endereco" class="form-control" id="endereco_cli_endereco" value="<?php echo $_smarty_tpl->tpl_vars['E']->value['endereco_cli_endereco'];?>
">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="endereco_cli_bairro">Bairro</label>
                                                                <input type="text" name="endereco_cli_bairro" class="form-control" id="endereco_cli_bairro" value="<?php echo $_smarty_tpl->tpl_vars['E']->value['endereco_cli_bairro'];?>
">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="endereco_cli_numero">Número</label>
                                                                <input type="text" class="form-control" name="endereco_cli_numero" id="endereco_cli_numero" value="<?php echo $_smarty_tpl->tpl_vars['E']->value['endereco_cli_numero'];?>
">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="endereco_cli_cep">CEP</label>
                                                                <input type="text" class="form-control" name="endereco_cli_cep" id="endereco_cli_cep" value="<?php echo $_smarty_tpl->tpl_vars['E']->value['endereco_cli_cep'];?>
">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="endereco_cli_cidade">Cidade</label>
                                                                <input type="text" class="form-control" name="endereco_cli_cidade" id="endereco_cli_cidade" value="<?php echo $_smarty_tpl->tpl_vars['E']->value['endereco_cli_cidade'];?>
">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="endereco_cli_uf">Estado</label>
                                                                <select class="form-control" name="endereco_cli_uf" id="endereco_cli_uf">
                                                            <?php if ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'AC') {?>
                                                            <option value="AC"selected>Acre</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'AL') {?>
                                                            <option value="AL"selected>Alagoas</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'AP') {?>
                                                            <option value="AP"selected>Amapá</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'AM') {?>
                                                            <option value="AM"selected>Amazonas</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'BA') {?>
                                                            <option value="BA"selected>Bahia</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'CE') {?>
                                                            <option value="CE"selected>Ceará</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'DF') {?>
                                                            <option value="DF"selected>Distrito Federal</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'ES') {?>
                                                            <option value="ES"selected>Espírito Santo</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'GO') {?>
                                                            <option value="GO"selected>Goiás</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'MA') {?>
                                                            <option value="MA"selected>Maranhão</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'MT') {?>
                                                            <option value="MT"selected>Mato Grosso</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'MS') {?>
                                                            <option value="MS"selected>Mato Grosso do Sul</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'MG') {?>
                                                            <option value="MG"selected>Minas Gerais</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'PA') {?>
                                                            <option value="PA"selected>Pará</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'PB') {?>
                                                            <option value="PB"selected>Paraíba</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'PR') {?>
                                                            <option value="PR"selected>Paraná</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'PE') {?>
                                                            <option value="PE"selected>Pernambuco</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'PI') {?>
                                                            <option value="PI"selected>Piauí</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'RJ') {?>
                                                            <option value="RJ"selected>Rio de Janeiro</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'RN') {?>
                                                            <option value="RN"selected>Rio Grande do Norte</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'RS') {?>
                                                            <option value="RS"selected>Rio Grande do Sul</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'RO') {?>
                                                            <option value="RO"selected>Rondônia</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'RR') {?>
                                                            <option value="RR"selected>Roraima</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'SC') {?>
                                                            <option value="SC"selected>Santa Catarina</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'SP') {?>
                                                            <option value="SP"selected>São Paulo</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'SE') {?>
                                                            <option value="SE"selected>Sergipe</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'TO') {?>
                                                            <option value="TO"selected>Tocantins</option>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['CLI_UF']->value == 'EX') {?>
                                                            <option value="EX"selected>Estrangeiro</option>
                                                            <?php }?>
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
                                                            <div class="form-group col-md-12">
                                                                <label for="endereco_cli_complemento">Complemento</label>
                                                                <input type="text" class="form-control" name="endereco_cli_complemento" id="endereco_cli_complemento" value="<?php echo $_smarty_tpl->tpl_vars['E']->value['endereco_cli_complemento'];?>
">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-success">Salvar</button>
                                                    <button type="reset" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php } else { ?> <?php }?>
                        </div>
                        <div class="row no-gutters pt-3">
                            <div class="col">
                                <button class="btn btn-success" data-toggle="modal" data-target="#NewModalAddress"><i class="ti-plus mr-2"></i> Adicionar Endereço</button>
                                <!-- Modal Address-->
                                <div class="modal fade" id="NewModalAddress" tabindex="-1" role="dialog" aria-labelledby="modalNewAddress" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalNewAddress">Adicionar Endereço</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form method="POST" id="formNovoEndereco">
                                                <div class="modal-body">
                                                    <div class="col">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label for="novo_cli_endereco">Rua</label>
                                                                <input type="text" name="novo_cli_endereco" class="form-control" id="novo_cli_endereco">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="novo_cli_bairro">Bairro</label>
                                                                <input type="text" name="novo_cli_bairro" class="form-control" id="novo_cli_bairro">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="novo_cli_numero">Número</label>
                                                                <input type="text" class="form-control" name="novo_cli_numero" id="novo_cli_numero">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="novo_cli_cep">CEP</label>
                                                                <input type="text" class="form-control" name="novo_cli_cep" id="novo_cli_cep">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="novo_cli_cidade">Cidade</label>
                                                                <input type="text" class="form-control" name="novo_cli_cidade" id="novo_cli_cidade">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="novo_cli_uf">Estado</label>
                                                                <select class="form-control" name="novo_cli_uf" id="novo_cli_uf">
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
                                                            <div class="form-group col-md-12">
                                                                <label for="novo_cli_complemento">Complemento</label>
                                                                <input type="text" class="form-control" name="novo_cli_complemento" id="novo_cli_complemento">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-success">Salvar</button>
                                                    <button type="reset" class="btn btn-info" data-dismiss="modal">Cancelar</button>
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
                            <div class="col text-right">
                                <p>Cliente desde: <?php echo $_smarty_tpl->tpl_vars['DATA_CAD']->value;?>
</p>
                            </div>
                            <div class="col-12 p-0">
                                <div class="col-lg-12 col-md-12 col-sm-auto p-0">
                                    <button id="btnAlterarSenha" class="site-btn login-btn">Alterar Senha</button>
                                    <div class="col-auto" id="divAlterarSenha">
                                        <div class="login-form">
                                            <h2 class="h4">Alterar Senha</h2>
                                            <form method="POST">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="cli_email">E-mail</label>
                                                        <input type="email" name="cli_email" class="form-control" id="cli_email" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="cli_senha">Senha Atual</label>
                                                        <input type="password" name="cli_senha" class="form-control" id="cli_senha" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="cli_nova_senha">Nova Senha</label>
                                                        <input type="password" name="cli_nova_senha" class="form-control" id="cli_nova_senha" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
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
                                    <button type="button" class="site-btn login-btn" data-toggle="modal" data-target="#modalExcluirConta">Excluir Conta</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalExcluirConta" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="TituloModalCentralizado">Excluir Conta</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <p class="text-danger">Você deseja <strong>EXCLUIR</strong> sua conta permanentemente?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="" method="POST">
                                                        <button type="submit" class="btn btn-danger" name="confirmar">Excluir</button>
                                                        <button type="button" class="btn btn-default border" data-dismiss="modal">Cancelar</button>
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
</section><?php }
}
