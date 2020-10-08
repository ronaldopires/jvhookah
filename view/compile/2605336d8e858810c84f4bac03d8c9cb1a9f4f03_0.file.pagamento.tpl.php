<?php
/* Smarty version 3.1.36, created on 2020-06-16 19:35:26
  from 'C:\xampp\htdocs\jvhookah\view\pagamento.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ee9492e4a3de7_02942395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2605336d8e858810c84f4bac03d8c9cb1a9f4f03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\pagamento.tpl',
      1 => 1592346922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9492e4a3de7_02942395 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="checkout-form">
            <div class="row no-gutters">
                <div class="col-lg-12 col-md-12 col-sm-auto">
                    <div class="place-order">
                        <h4>Pedido - <?php echo $_smarty_tpl->tpl_vars['PEDIDO']->value;?>
</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Produto <span>Total</span></li>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CARRINHO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                                <li class="fw-normal"><?php echo $_smarty_tpl->tpl_vars['P']->value['NOME'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['COR'];?>
 x <?php echo $_smarty_tpl->tpl_vars['P']->value['QTD'];?>
 <span>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['VALOR'];?>
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
                            <div class="order-btn col-12">
                                <button id="btnPag-seguro" class="btn" onclick="PagSeguroLightbox({
                                        code: '<?php echo $_smarty_tpl->tpl_vars['PS_COD']->value;?>
'
                                        }, {
                                        success : function(transactionCode) {
                                        alert('Transação efetuada com sucesso! - ' + transactionCode);
                                            window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDO_CONCLUIDO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
                                        },
                                        abort : function() {
                                        alert('Erro no processo de pagamento, tente novamente.');
                                            window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDO_ERRO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
                                        }
                                    });"><img src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-comprar-assina.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!"></button>
                                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
                                <p>Pague com PagSeguro - é rápido, grátis e seguro!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End --><?php }
}
