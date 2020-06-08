<?php
/* Smarty version 3.1.36, created on 2020-06-05 00:50:02
  from 'C:\xampp\htdocs\jvhookah\adm\view\adm_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed9c0ea804402_65317826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f478837b840c3fda1b67db27359910a459a9ee4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\adm\\view\\adm_pedidos.tpl',
      1 => 1591329001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed9c0ea804402_65317826 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
    <div class="container-fluid">
        <h4>Pedidos Efetuados</h4>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Pedidos</h4>
                        <p class="card-category">Último pedido em <?php echo $_smarty_tpl->tpl_vars['PEDIDO_RECENTE']->value[1]['ped_data'];?>
</p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th>Cliente</th>
                                <th>Valor</th>
                                <th>Data</th>
                                <th>Hora</th>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                                <tr>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['cli_sobrenome'];?>
</a></td>
                                    <td>$36,738</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
                                </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['ITENS_PEDIDO']->value == true) {?>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Detalhes do Pedidos</h4>
                        <!-- <p class="card-category"></p> -->
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th class="">Item</th>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Quantidade</th>
                                <th>Data</th>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS_PEDIDO']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>
                                <tr>
                                    <td class=""><img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['item_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['I']->value['item_nome'];?>
"></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['I']->value['item_nome'];?>
 - <?php echo $_smarty_tpl->tpl_vars['I']->value['item_cor'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['I']->value['item_valor'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['I']->value['item_qtd'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['I']->value['ped_data'];?>
</td>
                                </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Clientes que mais compraram</h4>
                        <!-- <p class="card-category">sdhbfjb</p> -->
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th></th>
                                <th>Nome</th>
                                <th>Quantidade</th>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLIENTES_PEDIDOS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                                <tr>
                                    <td><img class="rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_foto'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
"></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_sobrenome'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['C']->value['total'];?>
</td>
                                </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
