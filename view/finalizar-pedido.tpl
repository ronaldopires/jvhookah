<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <a href="{$PAG_PRODUTOS}">Produtos</a>
                    <a href="{$PAG_CARRINHO}">Carrinho</a>
                    <span>Finalizar Pedido</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12 col-sm-12 col-sm-auto">
                <div class="checkout-form">
                    <div class="place-order">
                        <h4>Seu Pedido</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Produto <span>Total</span></li>
                                {foreach from=$CARRINHO item=P}
                                <li class="fw-normal">{$P.pro_nome} {$P.pro_cor} x {$P.pro_qtd} <span>R$ {$P.pro_subTotal}</span></li>
                                {/foreach}
                                <li class="fw-normal">Subtotal <span>R$ {$VALOR}</span></li>
                                <li class="fw-normal">Frete <span>R$ {$FRETE}</span></li>
                                {if $DESCONTO == true}
                                <li class="fw-normal">Cupom de desconto <span>-{$DESCONTO} %</span></li>
                                {/if}
                                <li class="total-price">Total <span>R$ {$TOTAL}</span></li>
                            </ul>
                            <hr>
                            <h4>Formas de Pagamento</h4>
                            Boleto
                            PagSeguro

                            <div class="order-btn">
                                <span class="link" data-link="{$URL}"></span>
                                <button class="site-btn" id="pagamento">Teste</button>
                                <script type="text/javascript" src="{$SCRIPT}"></script>
                                <!-- <a type="submit" href="{$PAG_PAGAMENTO}" class="site-btn place-btn">Finalizar Pedido</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Shopping Cart Section End -->