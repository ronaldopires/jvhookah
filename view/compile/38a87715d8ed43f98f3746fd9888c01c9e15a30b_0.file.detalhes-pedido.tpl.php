<?php
/* Smarty version 3.1.36, created on 2020-06-19 01:40:49
  from 'C:\xampp\htdocs\jvhookah\view\detalhes-pedido.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eec41d152f102_43350022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38a87715d8ed43f98f3746fd9888c01c9e15a30b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\detalhes-pedido.tpl',
      1 => 1592541648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eec41d152f102_43350022 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PERFIL']->value;?>
"><i class="ti-user"></i> Perfil</a>
                    <span>Detalhes do Pedido</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<div class="container">
    <div class="row no-gutters mt-4">
        <div class="col-12">
            <div class="col">
                <h4 class="text-center">DETALHES DO PEDIDO</h4>
                <hr>
            </div>
            <div class="table-responsive table-itens">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Data: <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</th>
                            <th scope="col">Hora: <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</th>
                            <th scope="col">Ref: <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</th>
                            <th scope="col">Status: <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'];?>
</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="table-responsive table-itens">
                <table class="table">
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th scope="col"></th>
                            <th scope="col">Produto</th>
                            <th scope="col">Valor Unitário</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                        <tr class="text-center">
                            <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
"> </td>
                            <th class="align-middle" scope="row"><?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
 - <?php echo $_smarty_tpl->tpl_vars['P']->value['item_cor'];?>
</th>
                            <td class="align-middle">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
                            <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
                            <td class="align-middle">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
                        </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <tr>
                            <td><a href="meu-perfil" type="button" class="site-btn">Voltar</a></td>
                            <td colspan="2" class="text-right"><b>Frete:</b> R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</td>
                            <td colspan="2" class="text-right"><b>Valor Total: </b>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><?php }
}
