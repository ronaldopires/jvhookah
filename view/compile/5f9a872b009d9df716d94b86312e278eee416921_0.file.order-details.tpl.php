<?php
/* Smarty version 3.1.36, created on 2020-05-26 17:00:34
  from 'C:\xampp\htdocs\jvhookah\view\order-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ecd75621917d4_97471599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f9a872b009d9df716d94b86312e278eee416921' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\order-details.tpl',
      1 => 1590523233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecd75621917d4_97471599 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PROFILE']->value;?>
"><i class="ti-user"></i> Perfil</a>
                    <span>Detalhes do Pedido</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<div class="row no-gutters py-4 justify-content-center">
    <div class="col-lg-7 col-md-6 col-sm-auto">
        <h4 class="text-center">DETALHES DO PEDIDO <span class="float-right mb-4"><a href="profile" type="button" class="btn btn-default border">Voltar</a></span></h4>
        <hr>
        <div class="col table-responsive">
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
        <div class="col table-responsive">
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
                        <td colspan="4" class="text-right"><b>Frete:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</td>
                        <td><b>Valor Total: </b>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }
}
