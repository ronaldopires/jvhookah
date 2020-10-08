<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <a href="{$PAG_PRODUTOS}">Produtos</a>
                    <a href="{$PAG_CARRINHO}">Carrinho</a>
                    <span>Pagamento</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <div class="checkout-form">
            <div class="row no-gutters">
                <div class="col-lg-12 col-md-12 col-sm-auto">
                    <div class="place-order">
                        <h4>Pedido - {$PEDIDO}</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Produto <span>Total</span></li>
                                {foreach from=$CARRINHO item=P}
                                <li class="fw-normal">{$P.NOME} {$P.COR} x {$P.QTD} <span>R$ {$P.VALOR}</span></li>
                                {/foreach}
                                <li class="fw-normal">Subtotal <span>R$ {$VALOR}</span></li>
                                <li class="fw-normal">Frete <span>R$ {$FRETE}</span></li>
                                {if $DESCONTO == true}
                                <li class="fw-normal">Cupom de desconto <span>-{$DESCONTO} %</span></li>
                                {/if}
                                <li class="total-price">Total <span>R$ {$TOTAL}</span></li>
                            </ul>
                            <div class="order-btn col-12">
                                <button id="btnPag-seguro" class="btn" onclick="PagSeguroLightbox({
                                        code: '{$PS_COD}'
                                        }, {
                                        success : function(transactionCode) {
                                        alert('Transação efetuada com sucesso! - ' + transactionCode);
                                            window.location ='{$PAG_PEDIDO_CONCLUIDO}/{$REF}';
                                        },
                                        abort : function() {
                                        alert('Erro no processo de pagamento, tente novamente.');
                                            window.location ='{$PAG_PEDIDO_ERRO}/{$REF}';
                                        }
                                    });"><img src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-comprar-assina.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!"></button>
                                <script type="text/javascript" src="{$PS_SCRIPT}"></script>
                                <p>Pague com PagSeguro - é rápido, grátis e seguro!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->