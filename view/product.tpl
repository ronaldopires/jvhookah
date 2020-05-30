<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <a href="{$PAG_SHOP}">Produtos</a>
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
            {foreach from=$PRODUTOS_INFO item=P}
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="{$P.pro_img_gg}" alt="{$P.pro_nome}">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <div class="pt active" data-imgbigurl="{$P.pro_img_gg}"><img src="{$P.pro_img_gg}" alt="{$P.pro_nome}"></div>
                                {foreach from=$IMAGENS item=I}
                                <div class="pt" data-imgbigurl="{$I.img_nome_gg}"><img src="{$I.img_nome_gg}" alt="{$P.pro_nome}"></div>
                                {/foreach}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-details">
                            <div class="pd-title">
                                <form class="float-right" action="{$FAVORITOS}" method="POST">
                                    <div class="icon">
                                        <input type="hidden" name="pro_id_favorito" value="{$P.pro_id}">
                                        <button class="btn"><i class="icon_heart_alt"></i></button>
                                    </div>
                                </form>
                                <span>{$P.cate_nome}/{$P.sub_nome}</span>
                                <h3>{$P.pro_nome}</h3>
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
                                <h4>R$ {$P.pro_valor} {if $P.pro_desconto > 0}
                                    <span>R$ {$P.pro_valor_us}</span> {/if}
                                </h4>
                            </div>
                            <div class="pd-size-choose">
                                <p>Cores disponíveis</p>
                                <form name="carrinho" action="{$PAG_SHOPPING_ALTER}" method="post">
                                    {foreach $COR item=C}
                                    <div class="sc-item">
                                        <input name="pro_cor_selected" value="{$C}" required type="radio" id="sm-size[{$C}]">
                                        <label for="sm-size[{$C}]">{$C}</label>
                                    </div>
                                    {/foreach}
                            </div>
                            <div class="quantity">
                                <input type="hidden" name="pro_id" value="{$P.pro_id}" />
                                <input type="hidden" name="acao" value="add" /> {if $P.pro_estoque == 0}
                                <div class="col">
                                    <h3>Desculpe-nos</h3>
                                    <p>Infelizmente não temos este produto em estoque</p>
                                </div>
                                {else}
                                <button class="btn primary-btn pd-cart">Comprar</button> {/if}
                            </div>
                            </form>
                            <ul class="pd-tags">
                                <li><span>CATEGORIAS</span>: {$P.cate_nome}</li>
                                <li><span>TAGS</span>: {$P.cate_nome}, {$P.sub_nome}</li>
                            </ul>
                            <div class="pd-share">
                                <div class="p-code">Ref: {$P.pro_ref}</div>
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
                                            <h5>Introduction</h5>
                                            <p>{$P.pro_desc}</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="{$P.pro_img}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    {foreach from=$PRO_CARACTERISTICAS item=C}
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
                                                    <div class="p-stock">{$C.cts_material_tipo}</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Base</td>
                                            <td>
                                                <!-- <div class="p-price">{$C.cts_base_nome}</div> -->
                                                <div class="p-stock">{$C.cts_base_nome}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Material da Base</td>
                                            <td>
                                                <!-- <div class="cart-add">+ <i class="icon_bag_alt"></i></div> -->
                                                <div class="p-stock">{$C.cts_material_base}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Prato</td>
                                            <td>
                                                <div class="p-stock">{$C.cts_prato_nome}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Queimador</td>
                                            <td>
                                                <div class="p-weight">{$P.pro_peso}kg</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Material do Queimador</td>
                                            <td>
                                                <div class="p-size">{$P.pro_tamanho}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Modelo do Queimador</td>
                                            <td><span class="cs-color"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Tipo do Queimador</td>
                                            <td>
                                                <div class="p-code">{$P.pro_ref}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Mangueiras Inclusas</td>
                                            <td>
                                                <div class="p-code">{$P.pro_ref}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Material da Mangueira</td>
                                            <td>
                                                <div class="p-code">{$P.pro_ref}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Borrachas Inclusas</td>
                                            <td>
                                                <div class="p-code">{$P.pro_ref}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Marca</td>
                                            <td>
                                                <div class="p-code">{$P.pro_ref}</div>
                                            </td>
                                        </tr>
                                    </table>
                                    {/foreach}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                <div class="customer-review-option">
                                    <h4>2 Comments</h4>
                                    <div class="comment-option">
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="{$GET_TEMA}/img/product-single/avatar-1.png" alt="">
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
                                                <img src="{$GET_TEMA}/img/product-single/avatar-2.png" alt="">
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
            {/foreach}
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
                {foreach from=$MAIS_PRODUTOS item=P}
                <div class="col-lg-12 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{$P.pro_img}" alt="">
                            <!-- <div class="sale bg-warning">Poucas Peças</div> -->
                            <div class="estoque bg-danger">Esgotado</div>
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
                            <div class="catagory-name">{$P.sub_nome}</div>
                            <a href="{$PRODUTO}/{$P.pro_id}">
                                <h5>{$P.pro_nome}</h5>
                            </a>
                            <div class="product-price">
                                R$ {$P.pro_valor}
                                <!-- <span>$35.00</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                {/foreach}

            </div>
            <!-- <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{$GET_TEMA}/img/products/women-1.jpg" alt="">
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
                        <img src="{$GET_TEMA}/img/products/women-2.jpg" alt="">
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
                        <img src="{$GET_TEMA}/img/products/women-3.jpg" alt="">
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
                        <img src="{$GET_TEMA}/img/products/women-4.jpg" alt="">
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
<!-- Related Products Section End -->