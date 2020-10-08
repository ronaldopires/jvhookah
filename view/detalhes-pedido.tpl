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

<div class="container">
    <div class="row no-gutters mt-4">
        <div class="col-12">
            <div class="col">
                <h4 class="text-center">DETALHES DO PEDIDO</h4>
                <hr>
            </div>
            <div class="table-responsive table-itens">
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
            <div class="table-responsive table-itens">
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
                            <td><a href="meu-perfil" type="button" class="site-btn">Voltar</a></td>
                            <td colspan="2" class="text-right"><b>Frete:</b> R$ {$FRETE}</td>
                            <td colspan="2" class="text-right"><b>Valor Total: </b>R$ {$TOTAL}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>