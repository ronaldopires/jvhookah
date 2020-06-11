<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <a href="{$PAG_PERFIL}"><i class="ti-user"></i> Perfil</a>
                    <span>Detalhes do Pedido</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<div class="row no-gutters py-4 justify-content-center">
    <div class="col-lg-7 col-md-6 col-sm-auto">
        <h4 class="text-center">DETALHES DO PEDIDO <span class="float-right mb-4"><a href="meu_perfil" type="button" class="site-btn">Voltar</a></span></h4>
        <hr>
        <div class="col table-responsive">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Data: {$ITENS.1.ped_data}</th>
                        <th scope="col">Hora: {$ITENS.1.ped_hora}</th>
                        <th scope="col">Ref: {$ITENS.1.ped_ref}</th>
                        <th scope="col">Status: {$ITENS.1.ped_pag_status}</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="col table-responsive">
            <table class="table">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th scope="col"></th>
                        <th scope="col">Produto</th>
                        <th scope="col">Valor Unitário</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$ITENS item=P}
                    <tr class="text-center">
                        <td><img src="{$P.item_img}" alt="{$P.item_img}"> </td>
                        <th class="align-middle" scope="row">{$P.item_nome} - {$P.item_cor}</th>
                        <td class="align-middle">R$ {$P.item_valor}</td>
                        <td class="align-middle">{$P.item_qtd}</td>
                        <td class="align-middle">R$ {$P.item_sub}</td>
                    </tr>
                    {/foreach}
                    <tr>
                        <td colspan="4" class="text-right"><b>Frete:</b> {$ITENS.1.ped_frete_valor}</td>
                        <td><b>Valor Total: </b>R$ {$TOTAL}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>