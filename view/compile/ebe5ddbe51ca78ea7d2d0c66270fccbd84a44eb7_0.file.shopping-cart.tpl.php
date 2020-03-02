<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 03:40:28
  from 'C:\xampp\htdocs\jvhookah\view\shopping-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5c721c41cc39_78017246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebe5ddbe51ca78ea7d2d0c66270fccbd84a44eb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\shopping-cart.tpl',
      1 => 1583116826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5c721c41cc39_78017246 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                    <a href="./shop.html">Shop</a>
                    <span>Shopping Cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th class="p-name">Nome do Produto</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Total</th>
                                <th>
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOPPING_ALTER']->value;?>
" method="post">
                                        <input type="hidden" name="pro_id" value="1">
                                        <input type="hidden" name="acao" value="limpar">
                                        <button class="btn"><i class="ti-close"></i></button>
                                    </form>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                            <tr>
                                <td class="cart-pic first-row"><img width="150" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></td>
                                <td class="cart-title first-row">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                        <h5><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h5>
                                    </a>
                                </td>
                                <td class="p-price first-row">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOPPING_ALTER']->value;?>
" method="post">
                                                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                <input type="hidden" name="pro_qtd" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
">
                                                <input type="hidden" name="acao" value="remover">
                                                <button id="menos" class="btn"><i class="ti-minus"></i></button>
                                            </form>
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOPPING_ALTER']->value;?>
" method="post">
                                                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                <input type="hidden" name="pro_qtd" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
">
                                                <input type="hidden" name="acao" value="quantidade">
                                                <input id="resultado" class="form-control" min="1" name="pro_qtd" type="text" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
">
                                            </form>
                                            <!-- Adiciona uma unidade -->
                                            <form name="form_add" action="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOPPING_ALTER']->value;?>
" method="post">
                                                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                <input type="hidden" name="acao" value="add">
                                                <button id="mais" class="btn"><i class="ti-plus"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price first-row">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>
                                <td class="close-td first-row">
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOPPING_ALTER']->value;?>
" method="post">
                                        <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                        <input type="hidden" name="acao" value="del">
                                        <button class="btn"><i class="ti-close"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cart-buttons">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOP']->value;?>
" class="primary-btn continue-shop">Continue Comprando</a>
                            <a href="#" class="primary-btn up-cart">Atualizar Carrinho</a>
                        </div>
                        <div class="discount-coupon">
                            <h6>Cupom de Desconto</h6>
                            <form action="#" class="coupon-form">
                                <input type="text" placeholder="Digite o código do seu cupom">
                                <button type="submit" class="site-btn coupon-btn">Adicionar</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Subtotal <span>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span></li>
                                <li class="subtotal">Frete <span><a href="#cep"> A calcular </a></span></li>
                                <li class="subtotal">
                                    <div class="row no-gutters my-2 justify-content-end">
                                        <form name="cepform" id="cepform" class="form-inline" action="">
                                            <input class="form-control" type="text" name="cep" id="cep" placeholder="Digite seu cep">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-success input-group ml-2">calcular</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="subtotal">
                                    <div class="col" id="frete">

                                    </div>
                                </li>
                                <li class="cart-total">Total <span>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span></li>
                            </ul>
                            <a href="#" class="proceed-btn">FINALIZAR PEDIDO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End --><?php }
}
