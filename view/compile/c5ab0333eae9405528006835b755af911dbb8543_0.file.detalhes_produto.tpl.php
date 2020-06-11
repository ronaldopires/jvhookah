<?php
/* Smarty version 3.1.36, created on 2020-06-09 23:55:02
  from 'C:\xampp\htdocs\jvhookah\view\detalhes_produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ee04b866f52e6_83577995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5ab0333eae9405528006835b755af911dbb8543' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\detalhes_produto.tpl',
      1 => 1591757649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee04b866f52e6_83577995 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <span>Detalhes</span>
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
            <?php if ($_smarty_tpl->tpl_vars['TOTAL_DADOS']->value > 1) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUTOS_INFO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CORES']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?> <?php if ($_smarty_tpl->tpl_vars['ID']->value == $_smarty_tpl->tpl_vars['C']->value['pro_id']) {?>
                                <div class="pt active" data-imgbigurl="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_img_g'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_img_g'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_nome'];?>
"></div>
                                <?php } else { ?>
                                <div class="pt" data-imgbigurl="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_img_g'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_img_g'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_nome'];?>
"></div>
                                <?php }?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <div class="product-details">
                            <div class="pd-title">
                                <form class="float-right" action="<?php echo $_smarty_tpl->tpl_vars['FAVORITOS']->value;?>
" method="POST">
                                    <div class="icon">
                                        <input type="hidden" name="pro_id_favorito" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                        <button class="btn"><i class="icon_heart_alt"></i></button>
                                    </div>
                                </form>
                                <span><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['sub_nome'];?>
</span>
                                <h3><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h3>
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
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor</p> -->
                                <h4>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_desconto'] > 0) {?>
                                    <span>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor_us'];?>
</span> <?php }?>
                                </h4>
                            </div>
                            <div class="pd-size-choose">
                                <p>Cores disponíveis</p>
                                <form name="carrinho" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ALTERAR_CARRINHO']->value;?>
" method="post">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CORES']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                                    <div class="sc-item">
                                        <?php if ($_smarty_tpl->tpl_vars['ID']->value == $_smarty_tpl->tpl_vars['C']->value['pro_id']) {?>
                                        <input name="pro_cor" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_cor'];?>
" required type="radio" id="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_id'];?>
" checked>
                                        <label for="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_id'];?>
" class="active"><a class="cor_produto_ativo" href="<?php echo $_smarty_tpl->tpl_vars['PAG_DETALHES_PRODUTO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['pro_cor'];?>
</a></label> <?php } else { ?>
                                        <input name="pro_cor" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_cor'];?>
" required type="radio" id="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_id'];?>
">
                                        <label for="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_id'];?>
"><a class="cor_produto" href="<?php echo $_smarty_tpl->tpl_vars['PAG_DETALHES_PRODUTO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['pro_cor'];?>
</a></label> <?php }?>
                                    </div>
                                    <!-- <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DETALHES_PRODUTO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['pro_cor'];?>
</a> -->
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </div>
                            <div class="quantity">
                                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
" />
                                <input type="hidden" name="acao" value="add" /> <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_estoque'] == 0) {?>
                                <div class="col">
                                    <h3>Desculpe-nos</h3>
                                    <p>Infelizmente não temos este produto em estoque</p>
                                </div>
                                <?php } else { ?>
                                <button class="btn primary-btn pd-cart">Comprar</button> <?php }?>
                            </div>
                            </form>
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
                                <a data-toggle="tab" href="#tab-3" role="tab">COMENTÁRIOS</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <h5>Descrição</h5>
                                            <div class="col-auto p-0">
                                                <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</p>
                                            </div>
                                            <div class="col-auto p-0">
                                                <span><b>Tamanho: </b><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_tamanho'];?>
</span> - <span><b>Largura: </b><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_largura'];?>
 cm</span>
                                                <span><b>Altura: </b><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_altura'];?>
</span> - <span><b>Comprimento: </b><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_comprimento'];?>
 cm</span>
                                            </div>
                                            <div class="col-auto p-0">
                                                <p><b>Quantidade em Estoque</b> <span><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];?>
</span></p>
                                            </div>
                                            <div class="col-auto p-0">
                                                <p><b>Cor: </b><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>
</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_gg'];?>
" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO_CARACTERISTICAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                                    <table>
                                        <tr>
                                            <td class="p-catagory">Material</td>
                                            <td>
                                                <div class="pd-rating">

                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php } else { ?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUTOS_INFO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_gg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <div class="pt active" data-imgbigurl="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_gg'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_gg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></div>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGENS']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>
                                <div class="pt" data-imgbigurl="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome_gg'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome_gg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="product-details">
                            <div class="pd-title">
                                <form class="float-right" action="<?php echo $_smarty_tpl->tpl_vars['FAVORITOS']->value;?>
" method="POST">
                                    <div class="icon">
                                        <input type="hidden" name="pro_id_favorito" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                        <button class="btn"><i class="icon_heart_alt"></i></button>
                                    </div>
                                </form>
                                <span><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['sub_nome'];?>
</span>
                                <h3><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h3>
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
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor</p> -->
                                <h4>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_desconto'] > 0) {?>
                                    <span>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor_us'];?>
</span> <?php }?>
                                </h4>
                            </div>
                            <div class="pd-size-choose">
                                <p>Cores disponíveis</p>
                                <form name="carrinho" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ALTERAR_CARRINHO']->value;?>
" method="post">
                                    <div class="sc-item">
                                        <?php if ($_smarty_tpl->tpl_vars['ID']->value == $_smarty_tpl->tpl_vars['P']->value['pro_id']) {?>
                                        <input name="pro_cor" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>
" required type="radio" id="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>
" checked>
                                        <label for="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>
" class="active"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>
</label> <?php } else { ?>
                                        <input name="pro_cor" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>
" required type="radio" id="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>
">
                                        <label for="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>
</label> <?php }?>
                                    </div>
                            </div>
                            <div class="quantity">
                                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
" />
                                <input type="hidden" name="acao" value="add" /> <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_estoque'] == 0) {?>
                                <div class="col">
                                    <h3>Desculpe-nos</h3>
                                    <p>Infelizmente não temos este produto em estoque</p>
                                </div>
                                <?php } else { ?>
                                <button class="btn primary-btn pd-cart">Comprar</button> <?php }?>
                            </div>
                            </form>
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
                                <a data-toggle="tab" href="#tab-3" role="tab">COMENTÁRIOS</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h5>Descrição</h5>
                                            <div class="col-auto p-0">
                                                <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</p>
                                            </div>
                                            <div class="col-auto p-0">
                                                <span><b>Tamanho: </b><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_tamanho'];?>
</span> - <span><b>Largura: </b><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_largura'];?>
 cm</span>
                                                <span><b>Altura: </b><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_altura'];?>
</span> - <span><b>Comprimento: </b><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_comprimento'];?>
 cm</span>
                                            </div>
                                            <div class="col-auto p-0">
                                                <p><b>Quantidade em Estoque</b> <span><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];?>
</span></p>
                                            </div>
                                            <div class="col-auto p-0">
                                                <p><b>Cor: </b><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>
</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_gg'];?>
" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO_CARACTERISTICAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                                    <table>
                                        <tr>
                                            <td class="p-catagory">Material</td>
                                            <td>
                                                <div class="pd-rating">

                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                <div class="customer-review-option">
                                    <h4>2 Comentários</h4>
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
                                    <form action="#" class="" method="POST">
                                        <div class="personal-rating">
                                            <h6>Suas estrelas</h6>
                                            <span class="rating">
                                                <input name="stars" value="5" type="radio" class="rating-input"
                                                    id="rating-input-1-5" name="rating-input-1">
                                                <label for="rating-input-1-5" class="rating-star"></label>
                                                <input name="stars" value="4" type="radio" class="rating-input"
                                                    id="rating-input-1-4" name="rating-input-1">
                                                <label for="rating-input-1-4" class="rating-star"></label>
                                                <input name="stars" value="3" type="radio" class="rating-input"
                                                    id="rating-input-1-3" name="rating-input-1">
                                                <label for="rating-input-1-3" class="rating-star"></label>
                                                <input name="stars" value="2" type="radio" class="rating-input"
                                                    id="rating-input-1-2" name="rating-input-1">
                                                <label for="rating-input-1-2" class="rating-star"></label>
                                                <input name="stars" value="1" type="radio" class="rating-input"
                                                    id="rating-input-1-1" name="rating-input-1">
                                                <label for="rating-input-1-1" class="rating-star"></label>
                                            </span>
                                            <!-- <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div> -->
                                        </div>
                                        <div class="leave-comment register-form">
                                            <h4>Faça um Comentário</h4>
                                            <div class="row comment-form">
                                                <div class="col-lg-6 group-input">
                                                    <input type="text" name="coment_nome" class="form-control" placeholder="Seu nome" required>
                                                </div>
                                                <div class="col-lg-6 group-input">
                                                    <input type="email" name="coment_email" class="form-control" placeholder="Email" required>
                                                </div>
                                                <div class="col-lg-12 group-input">
                                                    <textarea placeholder="Seu comentário" name="coment_msg"></textarea>
                                                    <button type="submit" class="site-btn">Enviar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
</section>
<!-- Product Shop Section End -->

<!-- Related Products Section End -->
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
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
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                <div class="col-12">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_gg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"> <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_estoque'] == 0) {?>
                            <div class="estoque bg-danger">Esgotado</div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['pro_estoque'] < 20) {?> <div class="estoque bg-warning">Poucas Peças</div>
                        <?php }?>
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
                        <div class="catagory-name"><?php echo $_smarty_tpl->tpl_vars['P']->value['sub_nome'];?>
</div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PRODUTO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
</div>
<!-- Related Products Section End --><?php }
}
