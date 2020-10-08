<?php
/* Smarty version 3.1.36, created on 2020-06-16 21:16:25
  from 'C:\xampp\htdocs\jvhookah\view\email-compra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ee960d91b51c5_99543127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84cea36e9ce70ec40876ca03608906caa66e3a7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\email-compra.tpl',
      1 => 1592071222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee960d91b51c5_99543127 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PERFIL']->value;?>
">Perfil</a>
                    <span>Detalhes do Pedido</span>
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
                        <h4>Pedido Efetuado - </h4>
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
 <span>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</span></li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <li class="fw-normal">Frete <span>R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</span></li>
                                <li class="fw-normal">Subtotal <span>R$ <?php echo $_smarty_tpl->tpl_vars['VALOR']->value;?>
</span></li>
                                <li class="total-price">Total <span>$240.00</span></li>
                            </ul>
                            <div class="payment-check">
                                <h5>Método de Pagamento</h5>
                            </div>
                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Concluir Pagamento</button>
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
