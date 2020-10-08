<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <a href="{$PAG_PRODUTOS}">Produtos</a>
                    <a href="{$PAG_PERFIL}">Perfil</a>
                    <span>Detalhes do Pedido</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <form action="#" class="checkout-form">
            <div class="row no-gutters">
                <div class="col-lg-12 col-md-12 col-sm-auto">
                    <div class="place-order">
                        <h4>Pedido Efetuado - </h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Produto <span>Total</span></li>
                                {foreach from=$PRO item=P}
                                <li class="fw-normal">{$P.pro_nome} <span>R$ {$P.pro_valor}</span></li>
                                {/foreach}
                                <li class="fw-normal">Frete <span>R$ {$FRETE}</span></li>
                                <li class="fw-normal">Subtotal <span>R$ {$VALOR}</span></li>
                                <li class="total-price">Total <span>$240.00</span></li>
                            </ul>
                            <div class="payment-check">
                                <h5>Método de Pagamento</h5>
                            </div>
                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Concluir Pagamento</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Shopping Cart Section End -->