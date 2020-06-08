<?php
/* Smarty version 3.1.36, created on 2020-06-08 18:15:55
  from 'C:\xampp\htdocs\jvhookah\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5edeaa8b9f6820_67414020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10d6a43a3e8998c3b7a30974c67961ff376e5032' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\home.tpl',
      1 => 1591650954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edeaa8b9f6820_67414020 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/home1.jpg">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag,kids</span>
                        <h1>Black friday</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale <span>50%</span></h2>
                </div>
            </div> -->
        </div>
        <div class="single-hero-items set-bg" data-setbg="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/home2.jpg">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag,kids</span>
                        <h1>Black friday</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale <span>50%</span></h2>
                </div>
            </div> -->
        </div>
        <div class="single-hero-items set-bg" data-setbg="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/home3.jpg">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag,kids</span>
                        <h1>Black friday</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale <span>50%</span></h2>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-4 col-md-6">
                <a href="#1">
                    <div class="single-banner">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/post.png" alt="">
                        <!-- <div class="inner-text">
                            <h4>Men’s</h4>
                        </div> -->
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#2">
                    <div class="single-banner">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/card-1.png" alt="">
                        <!-- <div class="inner-text">
                            <h4>Women’s</h4>
                        </div> -->
                    </div>
                </a>
            </div>
            <div class="col-lg-4 offset-lg-0 col-md-6 col-sm-12 offset-md-3">
                <a href="#3">
                    <div class="single-banner">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/card-2.png" alt="">
                        <!-- <div class="inner-text">
                            <h4>Kid’s</h4>
                        </div> -->
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->
<!-- Produtos mais vendidos-->
<div class="row no-gutters my-4">
    <div class="col-lg-12 col-md-12 col-sm-auto">
        <div class="section-title">
            <h2>Mais Vendidos</h2>
        </div>
        <div class="col-lg-10 offset-lg-1 col-md-12">
            <div class="card-deck">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MAIS_VENDIDOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                <div class="card mais_vendidos">
                    <div class="card-header p-0">
                        <img class="card-img-top img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" alt="Imagem de capa do card">
                    </div>
                    <div class="card-body text-center">
                        <div class="pi-text">
                            <div class="catagory-name mb-3" style="color: #b2b2b2; text-transform: uppercase;"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</div>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DETALHES_PRODUTO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                <h5 class="product-name"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h5>
                            </a>
                            <div class="product-price mt-2" style="text-transform: uppercase; color: #e7ab3c; font-weight: 700; font-size: 20px;">
                                R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>

                                <!-- <span>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a type="button" href="<?php echo $_smarty_tpl->tpl_vars['PAG_DETALHES_PRODUTO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
" role="button" class="btn primary-btn pd-cart btn-block">Adicionar</a>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</div>
<!-- Women Banner Section Begin -->
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-large set-bg" data-setbg="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/products/women-large.jpg">
                    <h2>Bases</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1 col-md-6">
                <div class="filter-control">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIA']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                        <li class="active"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</li>
                        <!-- <li><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</li> -->
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUTOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="">
                            <div class="sale">Sale</div>
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
                                <li class="quick-view"><i class="fa fa-search-plus"></i></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
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

                                <span>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</span>
                            </div>
                        </div>
                    </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->

<!-- Deal Of The Week Section Begin-->
<section class="deal-of-week set-bg spad" data-setbg="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/time-bg.jpg">
    <div class="container">
        <div class="col-lg-6 text-center">
            <div class="section-title">
                <h2>Deal Of The Week</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet, consectetur adipisicing elit </p>
                <div class="product-price">
                    $35.00
                    <span>/ HanBag</span>
                </div>
            </div>
            <div class="countdown-timer" id="countdown">
                <div class="cd-item">
                    <span>56</span>
                    <p>Days</p>
                </div>
                <div class="cd-item">
                    <span>12</span>
                    <p>Hrs</p>
                </div>
                <div class="cd-item">
                    <span>40</span>
                    <p>Mins</p>
                </div>
                <div class="cd-item">
                    <span>52</span>
                    <p>Secs</p>
                </div>
            </div>
            <a href="#" class="primary-btn">Shop Now</a>
        </div>
    </div>
</section>
<!-- Deal Of The Week Section End -->

<!-- Man Banner Section Begin -->
<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <ul>
                        <li class="active">Clothings</li>
                        <li>HandBag</li>
                        <li>Shoes</li>
                        <li>Accessories</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/products/man-1.jpg" alt="">
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
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/products/man-2.jpg" alt="">
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
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/products/man-3.jpg" alt="">
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
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/products/man-4.jpg" alt="">
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
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large" data-setbg="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/products/man-large.jpg">
                    <h2>Men’s</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Man Banner Section End -->
<!-- Instagram Section Begin -->
<div class="row no-gutters">
    <div class="col-lg-12">
        <div class="section-title">
            <h2>Nosso Instagram</h2>
            <a class="nav-link" href="https://www.instagram.com/jvhookahlounge/" target="_blank">@jvhookahlounge</a>
        </div>
    </div>
</div>
<div class="instagram-photo">
    <div class="insta-item set-bg" data-setbg="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/p1.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="https://www.instagram.com/jvhookahlounge/" target="_blank">@jvhookahlounge</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/p2.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="https://www.instagram.com/jvhookahlounge/" target="_blank">@jvhookahlounge</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/p3.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="https://www.instagram.com/jvhookahlounge/" target="_blank">@jvhookahlounge</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/p4.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="https://www.instagram.com/jvhookahlounge/" target="_blank">@jvhookahlounge</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/p5.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="https://www.instagram.com/jvhookahlounge/" target="_blank">@jvhookahlounge</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/p6.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="https://www.instagram.com/jvhookahlounge/" target="_blank">@jvhookahlounge</a></h5>
        </div>
    </div>
</div>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/latest-1.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i> May 4,2019
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i> 5
                            </div>
                        </div>
                        <a href="#">
                            <h4>The Best Street Style From London Fashion Week</h4>
                        </a>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/latest-2.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i> May 4,2019
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i> 5
                            </div>
                        </div>
                        <a href="#">
                            <h4>Vogue's Ultimate Guide To Autumn/Winter 2019 Shoes</h4>
                        </a>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/latest-3.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i> May 4,2019
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i> 5
                            </div>
                        </div>
                        <a href="#">
                            <h4>How To Brighten Your Wardrobe With A Dash Of Lime</h4>
                        </a>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/icon-1.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Free Shipping</h6>
                            <p>For all order over 99$</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/icon-2.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Delivery On Time</h6>
                            <p>If good have prolems</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/icon-1.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Secure Payment</h6>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End --><?php }
}
