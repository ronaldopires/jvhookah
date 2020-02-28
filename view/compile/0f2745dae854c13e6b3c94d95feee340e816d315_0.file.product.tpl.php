<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-28 19:13:01
  from 'C:\xampp\htdocs\jvhookah\view\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e59582dc81f06_89980835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f2745dae854c13e6b3c94d95feee340e816d315' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\product.tpl',
      1 => 1582913581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e59582dc81f06_89980835 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOP']->value;?>
">Shop</a>
                    <span>Detail</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="filter-widget">
                    <h4 class="fw-title">Categorias</h4>
                    <ul class="filter-catagories">
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUTOS_INFO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <div class="pt active" data-imgbigurl="img/product-single/product-1.jpg"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt=""></div>
                                <div class="pt" data-imgbigurl="img/product-single/product-2.jpg"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product-single/product-2.jpg" alt=""></div>
                                <div class="pt" data-imgbigurl="img/product-single/product-3.jpg"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product-single/product-3.jpg" alt=""></div>
                                <div class="pt" data-imgbigurl="img/product-single/product-3.jpg"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product-single/product-3.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['sub_nome'];?>
</span>
                                <h3><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h3>
                                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <div class="pd-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(5)</span>
                            </div>
                            <div class="pd-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor</p>
                                <h4>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>

                                    <!--<span>629.99</span>--></h4>
                            </div>
                            <div class="pd-color">
                                <h6>Color</h6>
                                <div class="pd-color-choose">
                                    <div class="cc-item">
                                        <input type="radio" id="cc-black">
                                        <label for="cc-black" class="cc-black"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-yellow">
                                        <label for="cc-yellow" class="cc-yellow"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-violet">
                                        <label for="cc-violet" class="cc-violet"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-size-choose">
                                <div class="sc-item">
                                    <input type="radio" id="sm-size">
                                    <label for="sm-size">s</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="md-size">
                                    <label for="md-size">m</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="lg-size">
                                    <label for="lg-size">l</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="xl-size">
                                    <label for="xl-size">xs</label>
                                </div>
                            </div>
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                                <form action="" method="POST">
                                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                    <input type="hidden" name="acao" value="add">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CHECKOUT']->value;?>
" type="button" class="primary-btn pd-cart">Comprar</a>
                                </form>
                            </div>
                            <ul class="pd-tags">
                                <li><span>CATEGORIAS</span>: <?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</li>
                                <li><span>TAGS</span>: <?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
, <?php echo $_smarty_tpl->tpl_vars['P']->value['sub_nome'];?>
</li>
                            </ul>
                            <div class="pd-share">
                                <div class="p-code">Ref: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</div>
                                <div class="pd-social">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter-alt"></i></a>
                                    <a href="#"><i class="ti-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESCRIÇÃO</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-2" role="tab">ESPECIFICAÇÕES</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-3" role="tab">COMENTÁRIOS (02)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h5>Introduction</h5>
                                            <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO_CARACTERISTICAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                                    <table>
                                        <tr>
                                            <td class="p-catagory">Material</td>
                                            <td>
                                                <div class="pd-rating">

                                                    <!-- <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i> -->
                                                    <span></span>
                                                <div class="p-stock"><?php echo $_smarty_tpl->tpl_vars['C']->value['cts_material_tipo'];?>
</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Base</td>
                                            <td>
                                                <!-- <div class="p-price"><?php echo $_smarty_tpl->tpl_vars['C']->value['cts_base_nome'];?>
</div> -->
                                                <div class="p-stock"><?php echo $_smarty_tpl->tpl_vars['C']->value['cts_base_nome'];?>
</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Material da Base</td>
                                            <td>
                                                <!-- <div class="cart-add">+ <i class="icon_bag_alt"></i></div> -->
                                                <div class="p-stock"><?php echo $_smarty_tpl->tpl_vars['C']->value['cts_material_base'];?>
</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Prato</td>
                                            <td>
                                                <div class="p-stock"><?php echo $_smarty_tpl->tpl_vars['C']->value['cts_prato_nome'];?>
</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Queimador</td>
                                            <td>
                                                <div class="p-weight"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_peso'];?>
kg</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Material do Queimador</td>
                                            <td>
                                                <div class="p-size"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_tamanho'];?>
</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Modelo do Queimador</td>
                                            <td><span class="cs-color"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Tipo do Queimador</td>
                                            <td>
                                                <div class="p-code"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Mangueiras Inclusas</td>
                                            <td>
                                                <div class="p-code"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Material da Mangueira</td>
                                            <td>
                                                <div class="p-code"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Borrachas Inclusas</td>
                                            <td>
                                                <div class="p-code"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Marca</td>
                                            <td>
                                                <div class="p-code"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</div>
                                            </td>
                                        </tr>
                                    </table>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                <div class="customer-review-option">
                                    <h4>2 Comments</h4>
                                    <div class="comment-option">
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product-single/avatar-1.png" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <h5>Brandon Kelley <span>27 Aug 2019</span></h5>
                                                <div class="at-reply">Nice !</div>
                                            </div>
                                        </div>
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/product-single/avatar-2.png" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <h5>Roy Banks <span>27 Aug 2019</span></h5>
                                                <div class="at-reply">Nice !</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="personal-rating">
                                        <h6>Your Ratind</h6>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="leave-comment">
                                        <h4>Leave A Comment</h4>
                                        <form action="#" class="comment-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Email">
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea placeholder="Messages"></textarea>
                                                    <button type="submit" class="site-btn">Send message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
</section>
<!-- Product Shop Section End -->

<!-- Related Products Section End -->
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <hr>
                    <h2>Produtos Relacionados</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
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
            <!-- <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/products/women-1.jpg" alt="">
                        <div class="sale">Sale</div>
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
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/products/women-2.jpg" alt="">
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
                        <div class="catagory-name">Shoes</div>
                        <a href="#">
                            <h5>Guangzhou sweater</h5>
                        </a>
                        <div class="product-price">
                            $13.00
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/products/women-3.jpg" alt="">
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
                        <div class="catagory-name">Towel</div>
                        <a href="#">
                            <h5>Pure Pineapple</h5>
                        </a>
                        <div class="product-price">
                            $34.00
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/products/women-4.jpg" alt="">
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
                        <div class="catagory-name">Towel</div>
                        <a href="#">
                            <h5>Converse Shoes</h5>
                        </a>
                        <div class="product-price">
                            $34.00
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Related Products Section End --><?php }
}
