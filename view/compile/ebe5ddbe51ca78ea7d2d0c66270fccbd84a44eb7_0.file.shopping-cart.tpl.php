<?php
/* Smarty version 3.1.36, created on 2020-05-30 21:49:10
  from 'C:\xampp\htdocs\jvhookah\view\shopping-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed2ff06345ed6_04446086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebe5ddbe51ca78ea7d2d0c66270fccbd84a44eb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\shopping-cart.tpl',
      1 => 1590886149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed2ff06345ed6_04446086 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <span>Meu Carrinho</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!--Alerta Remover Todos os Itens-->
<div class="row no-gutters justify-content-center">
    <div class="container">
        <div id="alertRemoveAll" class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <p class="">Tem certeza que deseja remover <strong>TODOS</strong> os itens do seu carrinho ?</p>
            <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOPPING_ALTER']->value;?>
" method="post">
                <input type="hidden" name="pro_id" value="1">
                <input type="hidden" name="acao" value="limpar">
                <button class="btn btn-warning md-mx-2 col-sm-6 col-md-2 col-lg-2">Remover</button>
                <button type="button" class="closeAlert btn bg-white col-sm-2 col-md-2 col-lg-2">Cancelar</button>
            </form>
        </div>
    </div>
</div>
<!--Alerta Remover um item-->
<div class="row no-gutters justify-content-center">
    <div class="container">
        <div id="alertRemoveItem" class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <p class="">Tem certeza que deseja remover esse item do seu carrinho ?</p>
            <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOPPING_ALTER']->value;?>
" method="post">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                <input type="hidden" name="acao" value="del"> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <button class="btn btn-warning md-mx-2 col-sm-2 col-md-2 col-lg-2">Remover</button>
                <button type="button" class="closeAlert btn bg-white col-sm-2 col-md-2 col-lg-2">Cancelar</button>
            </form>
        </div>
    </div>
</div>

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table table-responsive sm-invisible">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th class="p-name">Nome do Produto</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Total</th>
                                <th>
                                    <button id="btnRemoveAll" class="btn "><i class="ti-close"></i></button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
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
 <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>
</h5>
                                    </a>
                                </td>
                                <td class="p-price first-row">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <!--Remover uma unidade-->
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOPPING_ALTER']->value;?>
" method="post">
                                                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                <input type="hidden" name="pro_qtd" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
">
                                                <input type="hidden" name="acao" value="remover">
                                                <button class="btn menos"><i class="ti-minus"></i></button>
                                            </form>
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOPPING_ALTER']->value;?>
" method="post">
                                                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                <input type="hidden" name="pro_qtd" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
">
                                                <input type="hidden" name="acao" value="quantidade">
                                                <input class="form-control resultado" min="1" name="pro_qtd" type="text" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
">
                                            </form>
                                            <!-- Adiciona uma unidade -->
                                            <form name="form_add" action="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOPPING_ALTER']->value;?>
" method="post">
                                                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                <input type="hidden" name="acao" value="add">
                                                <button class="btn mais"><i class="ti-plus"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price first-row">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>
                                <td class="close-td first-row">
                                    <button class="btn btnRemoveItem"><i class="ti-close"></i></button>
                                </td>
                            </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cart-buttons">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="primary-btn continue-shop">Continue Comprando</a>
                            <!-- <a href="#" class="primary-btn up-cart">Atualizar Carrinho</a> -->
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
                            <form id="formCep" class="discount-coupon" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CHECKOUT']->value;?>
" method="POST">
                                <ul>
                                    <li class="subtotal">Subtotal <span>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span></li>
                                    <li class="subtotal cart-total">
                                        <b style="line-height: 47px;">Frete</b> <span><input type="button" name="btn-calc" class="site-btn coupon-btn" id="btnCep" required value=" A calcular" /></span></li>
                                    <li class="mt-3" id="divCep">
                                        <div class="form-group row no-gutters my-2 coupon-form">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                                            <input type="hidden" name="peso_frete" id="peso_frete" value="<?php echo $_smarty_tpl->tpl_vars['PESO']->value;?>
">
                                            <input type="hidden" name="largura_frete" id="largura_frete" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_largura'];?>
">
                                            <input type="hidden" name="altura_frete" id="altura_frete" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_altura'];?>
">
                                            <input type="hidden" name="comprimento_frete" id="comprimento_frete" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_comprimento'];?>
"> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <input type="hidden" name="frete_valor" id="frete_valor"> <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
                                            <input type="number" name="cep_frete" id="cep_cli" maxlength="8" placeholder="Digite seu cep" value="<?php echo $_smarty_tpl->tpl_vars['CEP']->value;?>
" required/> <?php } else { ?>
                                            <input type="number" name="cep_frete" id="cep_cli" maxlength="8" placeholder="Digite seu cep" autofocus required/> <?php }?>
                                            <button type="button" id="btnCalcularCep" class="site-btn coupon-btn">Calcular</button>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="float-left" id="message"></p>
                                    </li>
                                    <li class="subtotal" id="resultCep">
                                        <span id="frete"></span>
                                    </li>
                                    <li class="cart-total">Total <span>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span></li>
                                </ul>
                                <button id="btn-finalizar" class="proceed-btn btn btn-block">FINALIZAR PEDIDO</button>
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
