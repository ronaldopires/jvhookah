<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-01 15:35:35
  from 'C:\xampp\htdocs\jvhookah\view\shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5bc837755030_21505169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54dc667461bf64ae499f6d9a6b39584793e4af9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\shop.tpl',
      1 => 1583073334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5bc837755030_21505169 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<!--Caso não exista produtos-->
<?php if ($_smarty_tpl->tpl_vars['ITENS']->value < 1) {?> <div class="container">
    <div class="col-8 offset-2">
        <h2 class="text-center my-4">Nenhum produto encontrado.</h2>
        <div class="section-title">
            <hr>
            <h2>Sugerido para você</h2>
            <hr>
        </div>
        <div class="product-slider owl-carousel">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MAIS_PRODUTOS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
            <div class="product-item">
                <div class="pi-pic">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="">
                    <!-- <div class="sale">Sale</div> -->
                    <div class="icon">
                        <i class="icon_heart_alt"></i>
                    </div>
                    <ul>
                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                        <li class="quick-view"><a href="#">+ Quick View</a></li>
                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                    </ul>
                </div>
                <div class="pi-text">
                    <div class="catagory-name">Coat</div>
                    <a href="#">
                        <h5>Pure Pineapple</h5>
                    </a>
                    <div class="product-price">
                        $14.00
                        <span>$35.00</span>
                    </div>
                </div>
            </div>
            <?php
}
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
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a>
                                <ul class="filter-catagories">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUB_CATEGORIAS']->value, 'S');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['S']->value) {
?>
                                    <li class="ml-5"><a href="<?php echo $_smarty_tpl->tpl_vars['S']->value['sub_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['S']->value['sub_nome'];?>
</a></li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Marcas</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                <label for="bc-calvin">
                                Calvin Klein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-diesel">
                                Diesel
                                <input type="checkbox" id="bc-diesel">
                                <span class="checkmark"></span>
                            </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-polo">
                                Polo
                                <input type="checkbox" id="bc-polo">
                                <span class="checkmark"></span>
                            </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-tommy">
                                Tommy Hilfiger
                                <input type="checkbox" id="bc-tommy">
                                <span class="checkmark"></span>
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Price</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filter</a>
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
                                    <select class="sorting">
                                    <option selected>ORDENAR POR</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['MENOR_PRECO']->value;?>
">MENOR PREÇO</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['MAIOR_PRECO']->value;?>
">MAIOR PREÇO</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['MAIS_VENDIDOS']->value;?>
">MAIS VENDIDOS</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS']->value;?>
">A-Z</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['Z']->value-'A';?>
">Z-A</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['DATA_LANCAMENTO']->value;?>
">DATA DE LANÇAMENTO</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['MELHOR_DESCONTO']->value;?>
">MELHOR DESCONTO</option>
                                </select>
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
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
.jpg" data-lightbox="rotate" data-title="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></a>
                                        <!-- <div class="sale pp-sale">Sale</div> -->
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
.jpg" data-lightbox="rotate" data-title="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"><i class="fa fa-search-plus"></i></a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
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

                                            <!-- <span>$35.00</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
}
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
