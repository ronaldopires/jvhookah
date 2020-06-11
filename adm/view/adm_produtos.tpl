<div class="container-fluid">
    <div class="col-12">
        {foreach from=$PRODUTOS item=P}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><span style="line-height: 38px;">{$P.pro_nome} Ref: {$P.pro_ref}</span>{if $P.pro_estoque == 0}<span class="bg-danger text-white p-2 d-inline-block text-uppercase ml-4"> Sem estoque</span>{/if}<span class="float-right"><button class="btn btn-danger" data-toggle="modal" data-target="#removerProduto{$P.pro_id}"><i class="fas fa-trash"></i></button></span></h6>
            </div>
            <!-- Modal Remover e Editar Produtos-->
            <div class="modal fade bd-example-modal-xl" id="removerProduto{$P.pro_id}" tabindex="-1" role="dialog" aria-labelledby="ExcluirModal" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-danger" id="ExcluirModal">Excluir Produto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-2">
                                    <img class="img img-fluid" style="width: 15rem;" src="{$P.pro_img}" alt="{$P.pro_nome}">
                                </div>
                                <div class="col">
                                    <p class="font-weight-bold text-primary">{$P.pro_nome}</p>
                                    <p>{$P.pro_desc}</p>
                                    <p>{$P.pro_valor}</p>
                                    <p class="text-danger">Você deseja excluir esse produto?</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
                        <img class="img img-fluid" src="{$P.pro_img_gg}" alt="{$P.pro_nome}">
                    </div>
                    <div class="col">
                        <p class="card-text text-info font-weight-bold">Descrição</p>
                        <p class="card-text">{$P.pro_desc}</p>
                        <p class="card-text text-info font-weight-bold">Características</p>
                        <p class="card-text"><span>Largura: {$P.pro_largura} cm</span> <span class="ml-3">Altura: {$P.pro_altura} cm</span> <span class="ml-3">Comprimento: {$P.pro_comprimento} cm</span> <span class="ml-3">Peso: {$P.pro_peso} kg</span><span class="ml-3">Modelo: {$P.pro_modelo}</span>                            <span class="ml-3">Tamanho: {$P.pro_tamanho}</span> <span class="ml-3">Cor: {$P.pro_cor}</span> <span class="ml-3">Quantidade em estoque: {$P.pro_estoque}</span></p>
                        <p class="card-text text-info font-weight-bold">Marca e Fabricante</p>
                        <p class="card-text"><span>Categoria: {$P.cate_nome}</span> <span class="ml-3">Sub Categoria: {$P.sub_nome}</span> <span class="ml-3">Fabricante: {$P.fab_nome}</span> <span class="ml-3">Quantidade em estoque {$P.pro_estoque}</span></p>
                        <p class="card-text"><span>Valor: R$ {$P.pro_valor}</span></p>
                    </div>
                    <div class="col-12 text-right">
                        <p><a type="button" href="#" class="btn btn-primary">Detalhes</a></p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-muted">Adicionado em {$P.pro_data_cad}</p>
            </div>
        </div>
        {/foreach}
    </div>
</div>