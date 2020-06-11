<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
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
                {foreach from=$PRODUTOS item=P}
                <div class="row my-3">
                    <div class="col">
                        <a href="{$PAG_DETALHES_PRODUTO}/{$P.pro_slug}/{$P.pro_id}"><img class="img img-fluid rounded-circle" src="{$P.pro_img}" alt="{$P.pro_nome}"></a>
                    </div>
                    <div class="col">
                        <a href="{$PAG_DETALHES_PRODUTO}/{$P.pro_slug}/{$P.pro_id}">
                            <p><b>{$P.pro_nome}</b></p>
                            <p class="product-promo"><span>R$ {$P.pro_valor}</span></p>
                        </a>
                    </div>
                </div>
                {/foreach}
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
                                <form action="{$PAG_PRODUTOS}" method="post">
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
                            <p>Mostrando {$ITENS} de {$ITENS} Produtos</p>
                        </div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="row">
                        {if $ITENS
                        < 1} <!--Caso não exista produtos-->
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
                                    {foreach from=$MAIS_PRODUTOS item=P}
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="{$P.pro_img}" alt="">
                                            <div class="sale">- 10%</div>
                                            <div class="icon">
                                                <i class="icon_heart_alt"></i>
                                            </div>
                                            <ul>
                                                <li class="w-icon active"><a href="{$PAG_DETALHES_PRODUTO}/{$P.pro_slug}/{$P.pro_id}"><i
                                                            class="icon_bag_alt"></i></a></li>
                                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">{$P.sub_nome}</div>
                                            <a href="#">
                                                <h5>{$P.pro_nome}</h5>
                                            </a>
                                            <div class="product-price">
                                                R$ {$P.pro_valor_us}
                                                <span>$35.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    {/foreach}
                                </div>
                            </div>
                            {else} {foreach from=$PRODUTOS item=P}
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <a class="img-hover-zoom" href="{$PAG_DETALHES_PRODUTO}/{$P.pro_slug}/{$P.pro_id}"><img src="{$P.pro_img_g}" alt="{$P.pro_nome}" title="{$P.pro_nome}"></a>

                                        <div class="promo">-{$P.pro_desconto}%</div>
                                        <!-- <div class="sale pp-sale">Novidade</div> -->
                                        <form action="{$FAVORITOS}" method="POST">
                                            <div class="icon">
                                                <input type="hidden" name="pro_id_favorito" value="{$P.pro_id}">
                                                <button class="btn"><i style="font-size: 24px;" class="icon_heart_alt"></i></button>
                                            </div>
                                        </form>
                                        <ul>
                                            <li class="w-icon active"><a href="{$PAG_DETALHES_PRODUTO}/{$P.pro_slug}/{$P.pro_id}"><i
                                                        class="icon_bag_alt" title="Comprar"></i></a></li>
                                            <li class="quick-view"><a href="" data-toggle="modal" data-target="#{$P.pro_slug}" title="Zoom na foto"><i class="fa fa-search-plus"></i></a>
                                            </li>
                                            <!-- <li class="w-icon"><a href="#" title="Comparar"><i class="fa fa-random"></i></a></li> -->
                                        </ul>
                                    </div>
                                    <!-- {if $P.pro_desconto > 0}
                                <div class="col-auto frete_free p-2 text-center">
                                    Promoção
                                </div>
                                {/if} -->
                                    <!-- {if $P.pro_frete_free == 's'}
                                <div class="col-auto frete_free p-2 text-center">
                                    Frete Gratuito
                                </div>
                                {/if} -->
                                    <div class="pi-text">
                                        <div class="catagory-name">{$P.sub_nome}</div>
                                        <a href="{$PAG_DETALHES_PRODUTO}/{$P.pro_slug}/{$P.pro_id}">
                                            <h5>{$P.pro_nome}</h5>
                                        </a>
                                        <div class="product-price">
                                            R$ {$P.pro_valor} {if $P.pro_desconto > 0}
                                            <span>R$ {$P.pro_valor_us}</span> {/if}
                                        </div>
                                    </div>
                                    <!-- Modal Products-->
                                    <div class="modal fade" id="{$P.pro_slug}" tabindex="-1" role="dialog" aria-labelledby="PhotoProducts" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="product-pic-zoom">
                                                            <img class="card-img-top product-big-img" src="{$P.pro_img_gg}" alt="{$P.pro_nome}">
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text">{$P.pro_nome} </p>
                                                        </div>
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
                <div class="col-auto">
                    {$PAGINAS}
                </div>
            </div>
        </div>
</section>