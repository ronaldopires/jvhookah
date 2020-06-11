<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <!-- Pedidos -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Todos os Pedidos</h6>
                        <span class="text-xs">Último pedido em {$PEDIDO_RECENTE.1.ped_data}</span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="text-info">
                                    <th>Cliente</th>
                                    <th>Valor</th>
                                    <th>Data</th>
                                </thead>
                                <tbody>
                                    {foreach from=$PEDIDOS item=P}
                                    <tr>
                                        <td><a href="{$PAG_PEDIDOS}/{$P.ped_cod}">{$P.cli_nome} {$P.cli_sobrenome}</a></td>
                                        <td>$36,78</td>
                                        <td>{$P.ped_data}</td>
                                    </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {if $ITENS_PEDIDO == true}
            <div class="col-lg-8 col-md-12">
                <!-- Itens do Pedido -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Detalhes do Pedido</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="text-info">
                                    <th class="sm-none">Item</th>
                                    <th>Nome</th>
                                    <th>Valor Unitário</th>
                                    <th>Quantidade</th>
                                    <th>Data</th>
                                </thead>
                                <tbody>
                                    {foreach from=$ITENS_PEDIDO item=I}
                                    <tr>
                                        <td class="sm-none"><img class="img img-fluid" src="{$I.item_img}" alt="{$I.item_nome}"></td>
                                        <td>{$I.item_nome} - {$I.item_cor}</td>
                                        <td>{$I.item_valor}</td>
                                        <td>{$I.item_qtd}</td>
                                        <td>{$I.ped_data}</td>
                                    </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {/if}
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <!-- Itens do Pedido -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Maiores Compradores</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="text-info">
                                    <th></th>
                                    <th>Nome</th>
                                    <th>Quantidade</th>
                                </thead>
                                <tbody>
                                    {foreach from=$CLIENTES_PEDIDOS item=C}
                                    <tr>
                                        <td><img class="rounded-circle img img-fluid" src="{$C.cli_foto}" alt="{$C.cli_nome}"></td>
                                        <td>{$C.cli_nome} {$C.cli_sobrenome}</td>
                                        <td>{$C.total}</td>
                                    </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>