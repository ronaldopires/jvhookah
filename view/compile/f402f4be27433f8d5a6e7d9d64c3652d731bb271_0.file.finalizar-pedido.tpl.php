<?php
/* Smarty version 3.1.36, created on 2020-10-08 16:21:00
  from 'C:\xampp\htdocs\jvhookah\view\finalizar-pedido.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f7f669cd65670_60428940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f402f4be27433f8d5a6e7d9d64c3652d731bb271' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\finalizar-pedido.tpl',
      1 => 1602184859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7f669cd65670_60428940 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Produtos</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">Carrinho</a>
                    <span>Finalizar Pedido</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12 col-sm-12 col-sm-auto">
                <div class="checkout-form">
                    <div class="place-order">
                        <h4>Seu Pedido</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Produto <span>Total</span></li>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CARRINHO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                                <li class="fw-normal"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>
 x <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
 <span>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</span></li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <li class="fw-normal">Subtotal <span>R$ <?php echo $_smarty_tpl->tpl_vars['VALOR']->value;?>
</span></li>
                                <li class="fw-normal">Frete <span>R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</span></li>
                                <?php if ($_smarty_tpl->tpl_vars['DESCONTO']->value == true) {?>
                                <li class="fw-normal">Cupom de desconto <span>-<?php echo $_smarty_tpl->tpl_vars['DESCONTO']->value;?>
 %</span></li>
                                <?php }?>
                                <li class="total-price">Total <span>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span></li>
                            </ul>
                            <hr>
                            <h4>Formas de Pagamento</h4>
                            Boleto
                            PagSeguro

                            <div class="order-btn">
                                <span class="link" data-link="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
"></span>
                                <button class="site-btn" id="pagamento">Teste</button>
                                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
                                <!-- <a type="submit" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PAGAMENTO']->value;?>
" class="site-btn place-btn">Finalizar Pedido</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Shopping Cart Section End --><?php }
}
