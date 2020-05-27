<?php
/* Smarty version 3.1.36, created on 2020-05-26 14:02:04
  from 'C:\xampp\htdocs\jvhookah\view\check-out.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ecd053c6eaa81_47610057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8f3025ab18da9c83673f04fb9bfb762c4e4ab35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\check-out.tpl',
      1 => 1590422547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecd053c6eaa81_47610057 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOP']->value;?>
">Produtos</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOPING_CART']->value;?>
">Carrinho</a>
                    <span>Check Out</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <form action="#" class="checkout-form">
            <div class="row no-gutters">
                <div class="col-lg-10 offset-1">
                    <div class="place-order">
                        <h4>Seu Pedido</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Produto <span>Total</span></li>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                                <li class="fw-normal"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
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
                                <li class="total-price">Total <span>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span></li>
                            </ul>
                            <div class="payment-check">
                                <div class="pc-item">
                                    <label for="pc-check">
                                        Cheque Payment
                                        <input type="checkbox" id="pc-check">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="pc-item">
                                    <label for="pc-paypal">
                                        Paypal
                                        <input type="checkbox" id="pc-paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="order-btn">
                                <a type="submit" href="<?php echo $_smarty_tpl->tpl_vars['PAYMENT']->value;?>
" class="site-btn place-btn">Finalizar Pedido</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Shopping Cart Section End --><?php }
}
