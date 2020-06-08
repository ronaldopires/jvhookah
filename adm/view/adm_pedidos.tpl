<div class="content">
    <div class="container-fluid">
        <h4>Pedidos Efetuados</h4>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Pedidos</h4>
                        <p class="card-category">Último pedido em {$PEDIDO_RECENTE.1.ped_data}</p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th>Cliente</th>
                                <th>Valor</th>
                                <th>Data</th>
                                <th>Hora</th>
                            </thead>
                            <tbody>
                                {foreach from=$PEDIDOS item=P}
                                <tr>
                                    <td><a href="{$PAG_PEDIDOS}/{$P.ped_cod}">{$P.cli_nome} {$P.cli_sobrenome}</a></td>
                                    <td>$36,738</td>
                                    <td>{$P.ped_data}</td>
                                    <td>{$P.ped_hora}</td>
                                </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {if $ITENS_PEDIDO == true}
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Detalhes do Pedidos</h4>
                        <!-- <p class="card-category"></p> -->
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th class="">Item</th>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Quantidade</th>
                                <th>Data</th>
                            </thead>
                            <tbody>
                                {foreach from=$ITENS_PEDIDO item=I}
                                <tr>
                                    <td class=""><img src="{$I.item_img}" alt="{$I.item_nome}"></td>
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
            {/if}
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Clientes que mais compraram</h4>
                        <!-- <p class="card-category">sdhbfjb</p> -->
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th></th>
                                <th>Nome</th>
                                <th>Quantidade</th>
                            </thead>
                            <tbody>
                                {foreach from=$CLIENTES_PEDIDOS item=C}
                                <tr>
                                    <td><img class="rounded-circle" src="{$C.cli_foto}" alt="{$C.cli_nome}"></td>
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