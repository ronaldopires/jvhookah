<?php
/* Smarty version 3.1.36, created on 2020-05-27 00:54:37
  from 'C:\xampp\htdocs\jvhookah\view\shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ecde47dc8e265_77013102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54dc667461bf64ae499f6d9a6b39584793e4af9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\shop.tpl',
      1 => 1590551675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecde47dc8e265_77013102 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <span>Produtos</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<!--Caso não exista produtos-->
<?php if ($_smarty_tpl->tpl_vars['ITENS']->value < 1) {?> <div class="container">
    <div class="col-8 offset-2">
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
                        <li class="w-icon active"><a href="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS_INFO']->value;?>
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
                        R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>

                        <span>$35.00</span>
                    </div>
                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        </div>
    </div>
    </div>
    <?php } else { ?>

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a>
                                <!--  <ul class="filter-catagories">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUB_CATEGORIAS']->value, 'S');
$_smarty_tpl->tpl_vars['S']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['S']->value) {
$_smarty_tpl->tpl_vars['S']->do_else = false;
?>
                                    <li class="ml-5"><a href="<?php echo $_smarty_tpl->tpl_vars['S']->value['sub_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['S']->value['sub_nome'];?>
</a></li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul> -->
                            </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" method="POST">
                        <div class="filter-widget">
                            <h4 class="fw-title">Marcas</h4>
                            <div class="fw-brand-check">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MARCAS']->value, 'M');
$_smarty_tpl->tpl_vars['M']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['M']->value) {
$_smarty_tpl->tpl_vars['M']->do_else = false;
?>
                                <div class="bc-item">
                                    <label for="<?php echo $_smarty_tpl->tpl_vars['M']->value['fab_nome'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['M']->value['fab_nome'];?>

                                    <input name="checked[]" value="<?php echo $_smarty_tpl->tpl_vars['M']->value['fab_id'];?>
" type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['M']->value['fab_nome'];?>
">
                                    <span class="checkmark"></span>
                                </label>
                                </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                        <div class="filter-widget">
                            <button class="filter-btn btn">Filtrar</button>
                        </div>
                    </form>
                    <div class="filter-widget">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" method="post">
                            <h4 class="fw-title">Preço</h4>
                            <div class="filter-range-wrap">
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input name="price_min" value="<?php echo $_smarty_tpl->tpl_vars['MIN']->value;?>
" type="text" id="minamount">
                                        <input name="price_max" value="<?php echo $_smarty_tpl->tpl_vars['MAX']->value;?>
" type="text" id="maxamount">
                                    </div>
                                </div>
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="<?php echo $_smarty_tpl->tpl_vars['MIN']->value;?>
" data-max="<?php echo $_smarty_tpl->tpl_vars['MAX']->value;?>
">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                            </div>
                            <button class="filter-btn btn">Filtrar</button>
                        </form>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Color</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-black">
                                <label class="cs-black" for="cs-black">Black</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-violet">
                                <label class="cs-violet" for="cs-violet">Violet</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue">
                                <label class="cs-blue" for="cs-blue">Blue</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow">
                                <label class="cs-yellow" for="cs-yellow">Yellow</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red">
                                <label class="cs-red" for="cs-red">Red</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label class="cs-green" for="cs-green">Green</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Size</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size">
                                <label for="s-size">s</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size">
                                <label for="m-size">m</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size">
                                <label for="l-size">l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xs-size">
                                <label for="xs-size">xs</label>
                            </div>
                        </div>
                    </div>
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
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
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
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Mostrando 01- 05 de <?php echo $_smarty_tpl->tpl_vars['ITENS']->value;?>
 Produtos</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUTOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></a>
                                        <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_estoque'] == 0) {?>
                                        <div class="estoque bg-danger">Esgotado</div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['pro_estoque'] < 20) {?> <div class="estoque bg-danger">Poucas Peças</div>
                                    <?php }?>
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
                                        <li class="w-icon active"><a href="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"><i
                                                        class="icon_bag_alt" title="Comprar"></i></a></li>
                                        <li class="quick-view"><a href="#" data-toggle="modal" data-target="#<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" title="Zoom na foto"><i class="fa fa-search-plus"></i></a>
                                        </li>
                                        <li class="w-icon"><a href="#" title="Comparar"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"><?php echo $_smarty_tpl->tpl_vars['P']->value['sub_nome'];?>
</div>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">
                                        <h5><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h5>
                                    </a>
                                    <div class="product-price">
                                        R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_desconto'] > 0) {?>
                                        <span>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desconto'];?>
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
                                                        <img class="card-img-top product-big-img" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </p>
                                                        <!-- <a href="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" class="btn btn-success">Comprar</a> -->
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </div>
                </div>
                <div class="loading-more">
                    <i class="icon_loading"></i>
                    <a href="#">
                            Loading More
                        </a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <?php }
}
}
