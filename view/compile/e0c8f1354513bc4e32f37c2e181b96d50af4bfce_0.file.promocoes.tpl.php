<?php
/* Smarty version 3.1.36, created on 2020-06-10 00:58:31
  from 'C:\xampp\htdocs\jvhookah\view\promocoes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ee05a67362545_89510436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0c8f1354513bc4e32f37c2e181b96d50af4bfce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\promocoes.tpl',
      1 => 1591761510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee05a67362545_89510436 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <span>Promoções</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 order-2 order-lg-1 produts-sidebar-filter">
                <h4 class="fw-title">Novidades</h4>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUTOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                <div class="row my-3">
                    <div class="col">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DETALHES_PRODUTO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
"><img class="img img-fluid rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></a>
                    </div>
                    <div class="col">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DETALHES_PRODUTO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                            <p><b><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</b></p>
                            <p class="product-promo"><span>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</span></p>
                        </a>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <div class="filter-widget">
                    <h4 class="fw-title">Tags</h4>
                    <div class="fw-tags">
                        <a href="#">Towel</a>
                        <a href="#">Shoes</a>
                        <a href="#">Coat</a>
                        <a href="#">Dresses</a>
                        <a href="#">Trousers</a>
                        <a href="#">Men's hats</a>
                        <a href="#">Backpack</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <div class="select-option">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" method="post">
                                    <select name="opcoes" id="opcoes" class="sorting">
                                            <option value="0" selected>ORDENAÇÃO PADRÃO</option>
                                            <option value="1">MENOR PREÇO</option>
                                            <option value="2">MAIOR PREÇO</option>
                                            <option value="3">MAIS RECENTE</option>
                                            <option value="4">A-Z</option>
                                            <option value="5">Z-A</option>
                                        </select>
                                    <input style="display: none;" id="enviar" type="submit" value="Enviar"></input>
                                </form>
                                <select class="p-show">
                                        <option value="">Itens:</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 text-right">
                            <p>Mostrando <?php echo $_smarty_tpl->tpl_vars['ITENS']->value;?>
 de <?php echo $_smarty_tpl->tpl_vars['ITENS']->value;?>
 Produtos</p>
                        </div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="row">
                        <?php if ($_smarty_tpl->tpl_vars['ITENS']->value < 1) {?> <!--Caso não exista produtos-->
                            <div class="col-lg-12 col-sm-9">
                                <div class="alert alert-warning mt-2 alert-dismissible fade show" role="alert">
                                    <strong>Ops</strong>
                                    <h3 class="my-2 text-center">Nenhum produto encontrado.</h3>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="section-title">
                                    <hr>
                                    <h2>Sugerido para você</h2>
                                    <hr>
                                </div>
                                <div class="product-slider owl-carousel">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MAIS_PRODUTOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="">
                                            <div class="sale">- 10%</div>
                                            <div class="icon">
                                                <i class="icon_heart_alt"></i>
                                            </div>
                                            <ul>
                                                <li class="w-icon active"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DETALHES_PRODUTO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
"><i
                                                            class="icon_bag_alt"></i></a></li>
                                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name"><?php echo $_smarty_tpl->tpl_vars['P']->value['sub_nome'];?>
</div>
                                            <a href="#">
                                                <h5><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h5>
                                            </a>
                                            <div class="product-price">
                                                R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor_us'];?>

                                                <span>$35.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                            <?php } else { ?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUTOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <a class="img-hover-zoom" href="<?php echo $_smarty_tpl->tpl_vars['PAG_DETALHES_PRODUTO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></a>

                                        <div class="promo">-<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desconto'];?>
%</div>
                                        <!-- <div class="sale pp-sale">Novidade</div> -->
                                        <form action="<?php echo $_smarty_tpl->tpl_vars['FAVORITOS']->value;?>
" method="POST">
                                            <div class="icon">
                                                <input type="hidden" name="pro_id_favorito" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                                <button class="btn"><i style="font-size: 24px;" class="icon_heart_alt"></i></button>
                                            </div>
                                        </form>
                                        <ul>
                                            <li class="w-icon active"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DETALHES_PRODUTO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
"><i
                                                        class="icon_bag_alt" title="Comprar"></i></a></li>
                                            <li class="quick-view"><a href="" data-toggle="modal" data-target="#<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" title="Zoom na foto"><i class="fa fa-search-plus"></i></a>
                                            </li>
                                            <!-- <li class="w-icon"><a href="#" title="Comparar"><i class="fa fa-random"></i></a></li> -->
                                        </ul>
                                    </div>
                                    <!-- <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_desconto'] > 0) {?>
                                <div class="col-auto frete_free p-2 text-center">
                                    Promoção
                                </div>
                                <?php }?> -->
                                    <!-- <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_frete_free'] == 's') {?>
                                <div class="col-auto frete_free p-2 text-center">
                                    Frete Gratuito
                                </div>
                                <?php }?> -->
                                    <div class="pi-text">
                                        <div class="catagory-name"><?php echo $_smarty_tpl->tpl_vars['P']->value['sub_nome'];?>
</div>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DETALHES_PRODUTO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                            <h5><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h5>
                                        </a>
                                        <div class="product-price">
                                            R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_desconto'] > 0) {?>
                                            <span>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor_us'];?>
</span> <?php }?>
                                        </div>
                                    </div>
                                    <!-- Modal Products-->
                                    <div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" tabindex="-1" role="dialog" aria-labelledby="PhotoProducts" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="product-pic-zoom">
                                                            <img class="card-img-top product-big-img" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_gg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
                    </div>
                </div>
                <div class="col-auto">
                    <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

                </div>
            </div>
        </div>
</section><?php }
}
