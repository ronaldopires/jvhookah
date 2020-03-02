<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <span>Produtos</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<!--Caso não exista produtos-->
{if $ITENS
< 1} <div class="container">
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
            {foreach from=$MAIS_PRODUTOS item=P}
            <div class="product-item">
                <div class="pi-pic">
                    <img src="{$P.pro_img}" alt="">
                    <div class="sale">- 10%</div>
                    <div class="icon">
                        <i class="icon_heart_alt"></i>
                    </div>
                    <ul>
                        <li class="w-icon active"><a href="{$PRODUTOS_INFO}/{$P.pro_id}"><i
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
                        R$ {$P.pro_valor}
                        <span>$35.00</span>
                    </div>
                </div>
            </div>
            {/foreach}


        </div>
    </div>
    </div>
    {else}

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            {foreach from=$CATEGORIAS item=C}
                            <li><a href="{$C.cate_link}">{$C.cate_nome}</a>
                                <!--  <ul class="filter-catagories">
                                    {foreach from=$SUB_CATEGORIAS item=S}
                                    <li class="ml-5"><a href="{$S.sub_link}">{$S.sub_nome}</a></li>
                                    {/foreach}
                                </ul> -->
                            </li>
                            {/foreach}
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Marcas</h4>
                        <div class="fw-brand-check">
                            {foreach from=$MARCAS item=M}
                            <div class="bc-item">
                                <label for="{$M.fab_nome}">
                                    {$M.fab_nome}
                                    <input type="checkbox" id="{$M.fab_nome}">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            {/foreach}
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
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="33" data-max="98">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filtrar</a>
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
                                    <form name="formulario1" action="{$PAG_PRODUTOS}" method="post">
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
                                <p>Mostrando 01- 05 de {$ITENS} Produtos</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            {foreach from=$PRODUTOS item=P}
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <a href="{$PRODUTOS_INFO}/{$P.pro_id}/{$P.pro_slug}"><img
                                                src="{$P.pro_img}" alt="{$P.pro_nome}" title="{$P.pro_nome}"></a>
                                        <!-- <div class="sale pp-sale">Sale</div> -->
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a
                                                    href="{$PRODUTOS_INFO}/{$P.pro_id}/{$P.pro_slug}"><i
                                                        class="icon_bag_alt" title="Comprar"></i></a></li>
                                            <li class="quick-view"><a href="#" data-toggle="modal"
                                                    data-target="#{$P.pro_slug}" title="Zoom na foto"><i class="fa fa-search-plus"></i></a>
                                            </li>
                                            <li class="w-icon"><a href="#" title="Comparar"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{$P.sub_nome}</div>
                                        <a href="{$PRODUTOS_INFO}/{$P.pro_id}/{$P.pro_slug}">
                                            <h5>{$P.pro_nome}</h5>
                                        </a>
                                        <div class="product-price">
                                            R$ {$P.pro_valor}
                                            <span>$35.00</span>
                                        </div>
                                    </div>
                                    <!-- Modal Products-->
                                    <div class="modal fade" id="{$P.pro_slug}" tabindex="-1" role="dialog"
                                        aria-labelledby="PhotoProducts" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="product-pic-zoom">
                                                            <img class="card-img-top product-big-img" src="{$P.pro_img}"
                                                                alt="{$P.pro_nome}">
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text">{$P.pro_nome} </p>
                                                            <!-- <a href="{$PRODUTOS_INFO}/{$P.pro_id}/{$P.pro_slug}" class="btn btn-success">Comprar</a> -->
                                                        </div>
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

    {/if}