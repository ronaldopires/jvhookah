<?php
/* Smarty version 3.1.36, created on 2020-06-03 20:51:53
  from 'C:\xampp\htdocs\jvhookah\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed83799347e15_37836648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba967ba50379f6c825ab891b85d7c76610703d1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\carrinho.tpl',
      1 => 1591228311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed83799347e15_37836648 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_ALTERAR_CARRINHO']->value;?>
" method="post">
                <input type="hidden" name="pro_id" value="1">
                <input type="hidden" name="acao" value="limpar">
                <button class="btn btn-warning md-mx-2 col-sm-6 col-md-2 col-lg-2" title="Remover todos os itens">Remover</button>
                <button type="button" class="closeAlert btn bg-white col-sm-2 col-md-2 col-lg-2" title="Cancelar remoção">Cancelar</button>
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
                                    <button id="btnRemoveAll" class="btn "><i class="ti-close" title="Remover todos os itens"></i></button>
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
" title="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></td>
                                <td class="cart-title first-row">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DETALHES_PRODUTO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                        <h5 title="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>

                                        </h5>
                                    </a>
                                </td>
                                <td class="p-price first-row" title="Valor <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <!--Remover uma unidade-->
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_ALTERAR_CARRINHO']->value;?>
" method="post">
                                                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                <input type="hidden" name="pro_qtd" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
">
                                                <input type="hidden" name="acao" value="remover">
                                                <button class="btn menos"><i class="ti-minus" title="Remover Unidade"></i></button>
                                            </form>
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_ALTERAR_CARRINHO']->value;?>
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
                                            <form name="form_add" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ALTERAR_CARRINHO']->value;?>
" method="post">
                                                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                <input type="hidden" name="acao" value="add">
                                                <button class="btn mais"><i class="ti-plus" title="Adicionar Unidade"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price first-row">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>
                                <td class="close-td first-row">
                                    <button class="btn btnRemoveItem" data-toggle="modal" data-target="#nome<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
" title="Remover Item"><i class="ti-close"></i></button>
                                </td>
                                <!-- Modal -->
                                <div class="col-auto p-0">
                                    <div class="modal fade" id="nome<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
" tabindex="-1" role="dialog" aria-labelledby="modalRemoverProduto" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalRemoverProduto"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <p class="">Tem certeza que deseja remover esse item do seu carrinho ? </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row no-gutters justify-content-center">
                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_ALTERAR_CARRINHO']->value;?>
" method="post">
                                                            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                            <input type="hidden" name="acao" value="del">
                                                            <div class="col mr-3">
                                                                <button class="btn btn-danger" title="Remover Item">Remover</button>
                                                            </div>
                                                            <div class="col">
                                                                <button type="button" class="closeAlert border btn" data-dismiss="modal" title="Cancelar remoção">Cancelar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
" class="primary-btn continue-shop" title="Continue comprando">Continue Comprando</a>
                            <!-- <a href="#" class="primary-btn up-cart">Atualizar Carrinho</a> -->
                        </div>
                        <div class="discount-coupon">
                            <h6>Cupom de Desconto</h6>
                            <form action="" method="POST" class="coupon-form">
                                <input name="cupom_cliente" type="text" value="<?php echo $_smarty_tpl->tpl_vars['CUPOM_CLI']->value;?>
" id="cupom_cliente" placeholder="Digite o código do seu cupom" autocomplete="off" title="Código do cupom" required />
                                <button type="submit" id="add_cupom" class="site-btn coupon-btn" title="Adicionar  cupom">Adicionar</button>
                            </form>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['CUPOM']->value == true) {?>
                        <div class="col-auto p-0">
                            <div class="card text-center">
                                <div class="card-header text-right bg-white">
                                    <form action="" method="POST">
                                        <span title="Remover cupom">Remover Cupom </span><button class="btn" name="removerCupom" title="Remover cupom"><i class="ti-close"></i></button>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-success">Cupom Aplicado com sucesso</h5>
                                    <p class="card-text">Valor do desconto <b>R$ -<span><?php echo $_smarty_tpl->tpl_vars['VALOR']->value;?>
</b></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <div class="col-lg-5 offset-lg-2">

                        <div class="proceed-checkout">
                            <form id="formCep" class="discount-coupon" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR_PEDIDO']->value;?>
" method="POST">
                                <ul>
                                    <li class="subtotal">Subtotal <span>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span></li>
                                    <li class="subtotal cart-total">
                                        <b style="line-height: 47px;">Frete</b> <span><input type="button" name="btn-calc" class="site-btn coupon-btn" id="btnCep" required value=" A calcular" title="Calcular frete" /></span></li>
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
                                            <input type="text" name="cep_frete" id="cep_cli" maxlength="8" placeholder="Digite seu cep" value="<?php echo $_smarty_tpl->tpl_vars['CEP']->value;?>
" required/> <?php } else { ?>
                                            <input type="text" name="cep_frete" id="cep_cli" maxlength="8" placeholder="Digite seu cep" autofocus required/> <?php }?>
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
