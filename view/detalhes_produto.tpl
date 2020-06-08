<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <a href="{$PAG_PRODUTOS}">Produtos</a>
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
            {if $TOTAL_DADOS > 1} {foreach from=$PRODUTOS_INFO item=P}
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="{$P.pro_img_g}" alt="{$P.pro_nome}">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                {foreach from=$CORES item=C} {if $ID == $C.pro_id}
                                <div class="pt active" data-imgbigurl="{$C.pro_img_g}"><img src="{$C.pro_img_g}" alt="{$C.pro_nome}"></div>
                                {else}
                                <div class="pt " data-imgbigurl="{$C.pro_img_g}"><img src="{$C.pro_img_g}" alt="{$C.pro_nome}"></div>
                                {/if} {/foreach}
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
                                <form name="carrinho" action="{$PAG_ALTERAR_CARRINHO}" method="post">
                                    {foreach from=$CORES item=C}
                                    <div class="sc-item">
                                        {if $ID == $C.pro_id}
                                        <input name="pro_cor" value="{$C.pro_cor}" required type="radio" id="{$C.pro_id}" checked>
                                        <label for="{$C.pro_id}" class="active"><a class="cor_produto_ativo" href="{$PAG_DETALHES_PRODUTO}/{$C.pro_slug}/{$C.pro_id}">{$C.pro_cor}</a></label> {else}
                                        <input name="pro_cor" value="{$C.pro_cor}" required type="radio" id="{$C.pro_id}">
                                        <label for="{$C.pro_id}"><a class="cor_produto" href="{$PAG_DETALHES_PRODUTO}/{$C.pro_slug}/{$C.pro_id}">{$C.pro_cor}</a></label> {/if}
                                    </div>
                                    <!-- <a href="{$PAG_DETALHES_PRODUTO}/{$C.pro_slug}/{$C.pro_id}">{$C.pro_cor}</a> -->
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
                                            <h5>Descrição</h5>
                                            <div class="col-auto p-0">
                                                <p>{$P.pro_desc}</p>
                                            </div>
                                            <div class="col-auto p-0">
                                                <span><b>Tamanho: </b>{$P.pro_tamanho}</span> - <span><b>Largura: </b>{$P.pro_largura} cm</span>
                                                <span><b>Altura: </b>{$P.pro_altura}</span> - <span><b>Comprimento: </b>{$P.pro_comprimento} cm</span>
                                            </div>
                                            <div class="col-auto p-0">
                                                <p><b>Quantidade em Estoque</b> <span>{$P.pro_estoque}</span></p>
                                            </div>
                                            <div class="col-auto p-0">
                                                <p><b>Cor: </b>{$P.pro_cor}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="{$P.pro_img_gg}" alt="">
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

                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
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
            {/foreach} {else} {foreach from=$PRODUTOS_INFO item=P}
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
                                <form name="carrinho" action="{$PAG_ALTERAR_CARRINHO}" method="post">
                                    <div class="sc-item">
                                        {if $ID == $P.pro_id}
                                        <input name="pro_cor" value="{$P.pro_cor}" required type="radio" id="{$P.pro_cor}" checked>
                                        <label for="{$P.pro_cor}" class="active">{$P.pro_cor}</label> {else}
                                        <input name="pro_cor" value="{$P.pro_cor}" required type="radio" id="{$P.pro_cor}">
                                        <label for="{$P.pro_cor}">{$P.pro_cor}</label> {/if}
                                    </div>
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
                                            <h5>Descrição</h5>
                                            <div class="col-auto p-0">
                                                <p>{$P.pro_desc}</p>
                                            </div>
                                            <div class="col-auto p-0">
                                                <span><b>Tamanho: </b>{$P.pro_tamanho}</span> - <span><b>Largura: </b>{$P.pro_largura} cm</span>
                                                <span><b>Altura: </b>{$P.pro_altura}</span> - <span><b>Comprimento: </b>{$P.pro_comprimento} cm</span>
                                            </div>
                                            <div class="col-auto p-0">
                                                <p><b>Quantidade em Estoque</b> <span>{$P.pro_estoque}</span></p>
                                            </div>
                                            <div class="col-auto p-0">
                                                <p><b>Cor: </b>{$P.pro_cor}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="{$P.pro_img_gg}" alt="">
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

                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
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
            {/foreach} {/if}
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
                            <img src="{$P.pro_img_gg}" alt="{$P.pro_nome}"> {if $P.pro_estoque == 0}
                            <div class="estoque bg-danger">Esgotado</div>
                            {else if $P.pro_estoque
                            < 20} <div class="estoque bg-warning">Poucas Peças</div>
                        {/if}
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
    </div>
</div>
</div>
<!-- Related Products Section End -->