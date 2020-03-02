<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-01 10:10:20
  from 'C:\xampp\htdocs\jvhookah\view\check-out.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5b7bfcef28d5_37533264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8f3025ab18da9c83673f04fb9bfb762c4e4ab35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\check-out.tpl',
      1 => 1583053820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5b7bfcef28d5_37533264 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Shop</a>
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
        <div class="checkout-form">
            <div class="row">
                <!-- <div class="col-lg-6">
                    <div class="checkout-content">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
" class="content-btn">Clique aqui para fazer o Login</a>
                    </div>
                    <h4>Biiling Details</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fir">Nome<span>*</span></label>
                            <input type="text" id="fir">
                        </div>
                        <div class="col-lg-6">
                            <label for="last">Sobrenome<span>*</span></label>
                            <input type="text" id="last">
                        </div>
                        <div class="col-lg-12">
                            <label for="cun-name">Company Name</label>
                            <input type="text" id="cun-name">
                        </div>
                        <div class="col-lg-12">
                            <label for="cun">Country<span>*</span></label>
                            <input type="text" id="cun">
                        </div>
                        <div class="col-lg-12">
                            <label for="street">Street Address<span>*</span></label>
                            <input type="text" id="street" class="street-first">
                            <input type="text">
                        </div>
                        <div class="col-lg-12">
                            <label for="zip">Postcode / ZIP (optional)</label>
                            <input type="text" id="zip">
                        </div>
                        <div class="col-lg-12">
                            <label for="town">Town / City<span>*</span></label>
                            <input type="text" id="town">
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Email Address<span>*</span></label>
                            <input type="text" id="email">
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">Phone<span>*</span></label>
                            <input type="text" id="phone">
                        </div>
                        <div class="col-lg-12">
                            <div class="create-item">
                                <label for="acc-create">
                                    Criar conta?
                                    <input type="checkbox" id="acc-create">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12">
                    <div class="place-order">
                        <h4>Meu Carrinho <span><i class="ti-shopping-cart-full"></i></span></h4>

                        <div class="order-total">
                            <!--Table Orders-->
                            <div class="responsive-table">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr class="border-bottom">
                                            <th colspan="2" scope="col">Produto</th>
                                            <th scope="col">Entrega</th>
                                            <th scope="col">Preço</th>
                                            <th scope="col">Quantidade</th>
                                            <th scope="col">Total</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="order-table">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                                        <tr class="border-bottom">
                                            <td class="text-center"><img width="150" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></td>
                                            <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
                                            <td class="align-middle">A calcular</td>
                                            <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                                            <td class="align-middle">
                                                <!--Remover 1 unidade-->
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_CHECK_OUT']->value;?>
" method="post">
                                                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                    <input type="hidden" name="pro_qtd" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
">
                                                    <input type="hidden" name="acao" value="remover">
                                                    <button class="btn"><i class="ti-minus"></i></button>
                                                </form>
                                                <!--Altera a quantidade-->
                                                <form name="form_quantidade" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CHECK_OUT']->value;?>
" method="post">
                                                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                    <input type="hidden" name="pro_qtd" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
">
                                                    <input type="hidden" name="acao" value="quantidade">
                                                    <input class="form-control col-auto" min="1" name="pro_qtd" type="number" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
">
                                                </form>
                                                <!--Adiciona 1 unidade-->
                                                <form name="form_add" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CHECK_OUT']->value;?>
" method="post">
                                                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                    <input type="hidden" name="acao" value="add">
                                                    <button class="btn"><i class="ti-plus"></i></button>
                                                </form>

                                            </td>
                                            <td class="align-middle">R$ <span><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</span></td>
                                            <td class="align-middle">
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_CHECK_OUT']->value;?>
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
                            <div class="checkout-content">
                                <div class="col-6 mt-3">
                                    <form class="form-row" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CHECK_OUT']->value;?>
" method="post">
                                        <div class="col">
                                            <input id="cupom" type="text" required placeholder="Digite seu cupom de desconto">
                                        </div>
                                        <div class="col-3">
                                            <button type="submit" class="btn btn-outline-success form-control" style="height: 56px;">Adicionar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col text-right">
                                        <p><span class="font-weight-bold mr-5">ENTREGA</span> <a class="" href=""><span id="calc_frete">Calcular Frete</span></a></p>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col p-3">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="btn btn-outline-info" type="button"><i class="ti-shopping-cart mr-2"></i> Comprar mais</a>
                                    </div>
                                    <div class="col p-3 text-right">
                                        <span class="font-weight-bold mr-5">TOTAL </span><span class="valor-total">R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span>
                                    </div>
                                </div>
                            </div>
                            <div class="payment-check text-right">
                                <div class="pc-item">
                                    <label for="pc-check">
                                        Pag Seguro
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
                            <form action="#">
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Fechar Pedido</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End --><?php }
}
