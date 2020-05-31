<?php
/* Smarty version 3.1.36, created on 2020-05-30 23:42:02
  from 'C:\xampp\htdocs\jvhookah\view\pagamento.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed3197a53aef6_46247738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2605336d8e858810c84f4bac03d8c9cb1a9f4f03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\pagamento.tpl',
      1 => 1590884553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed3197a53aef6_46247738 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOPING_CART']->value;?>
">Carrinho</a>
                    <span>Pagamento</span>
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
                <div class="col-lg-12 col-md-12 col-sm-auto">
                    <div class="place-order">
                        <h4>Seu Pedido</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Product <span>Total</span></li>
                                <li class="fw-normal">Combination x 1 <span>$60.00</span></li>
                                <li class="fw-normal">Combination x 1 <span>$60.00</span></li>
                                <li class="fw-normal">Combination x 1 <span>$120.00</span></li>
                                <li class="fw-normal">Subtotal <span>$240.00</span></li>
                                <li class="total-price">Total <span>$240.00</span></li>
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
                                <button type="submit" class="site-btn place-btn">Pagamento</button>
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
