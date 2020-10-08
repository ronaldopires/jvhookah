<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <!-- <a href="{$PAG_PRODUTOS}">Produtos</a> -->
                    <span>Pagamento Concluído</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<div class="container my-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title text-success">Pedido realizado com sucesso</h4>
                            <hr>
                            <p class="card-text"><span><b>Código da transação: </span> {$CODIGO}</b>
                            </p>
                            <p class="card-text"><span class="mr-3"><b>Referência: </b></span>{$REF}</p>
                            <p class="card-text"><span class="mr-3"><b>Status do pagamento: </b></span>{$STATUS}</p>
                            <p class="card-text"><span class="mr-3"><b>Forma de pagamento: </b></span>{$FORMA_PAG}</p>
                            <p class="card-text"><span class="mr-3"><b>Valor total: </b></span>R$ {$VALOR_TOTAL}</p>
                        </div>
                    </div>
                    <div class="col p-0 mt-3">
                        <p>Seu produto será entregue em...</p>
                        <p>Em até 48hs</p>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{$DATA}</small>
                </div>
            </div>
        </div>
    </div>
</div>