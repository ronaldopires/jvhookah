<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <span>Meu Perfil</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<!-- Tabs Profile -->
<section class="page-profile my-4">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-auto mr-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand d-none d-sm-block d-md-none" href="#">Minha Conta</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-profile" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menu-profile">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link account d-sm-none d-md-block">Minha Conta</a>
                            <a class="nav-link active" id="historico-pedidos-tab" data-toggle="pill" href="#historico-pedidos" role="tab" aria-controls="historico-pedidos" aria-selected="false">
                                <i class="icon_bag_alt mr-2"></i> Histórico de Pedidos</a>
                            <a class="nav-link" id="dados-pessoais-tab" data-toggle="pill" href="#dados-pessoais" role="tab" aria-controls="dados-pessoais" aria-selected="true"> <i class="ti-user mr-2"></i> Dados Pessoais</a>
                            <a class="nav-link" id="enderecos-tab" data-toggle="pill" href="#enderecos" role="tab" aria-controls="enderecos" aria-selected="false"><i class="ti-map-alt mr-2"></i>
                                Endereços</a>
                            <a class="nav-link" id="configuracoes-tab" data-toggle="pill" href="#configuracoes" role="tab" aria-controls="configuracoes" aria-selected="false">
                                <i class="ti-settings mr-2"></i> Configurações</a>
                            <a class="nav-link" href="#">Sair</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col p-3 border">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="dados-pessoais" role="tabpanel" aria-labelledby="dados-pessoais-tab">
                        <h4 class="text-center">DADOS PESSOAIS</h4>
                        <hr>
                    </div>
                    <div class="tab-pane fade" id="enderecos" role="tabpanel" aria-labelledby="enderecos-tab">
                        <h4 class="text-center">ENDEREÇOS</h4>
                        <hr>
                        <!-- address-->
                        <div class="card-deck">
                            <div class="card col-6">
                                <div class="card-body">
                                    <h5 class="card-title">Casa</h5>
                                    <p class="card-text">Osahan House, Jawaddi Kalan, Ludhiana, Punjab 141002, India</p>
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalExemplo">
                                        <i class="ti-pencil-alt mr-2"></i> Editar
                                      </button>
                                    <a href="#" class="btn btn-outline-danger"><i class="ti-trash mr-2"></i> Deletar</a>
                                </div>
                            </div>
                            <div class="card col-6">
                                <div class="card-body">
                                    <h5 class="card-title">Trabalho</h5>
                                    <p class="card-text">NCC, Model Town Rd, Pritm Nagar, Model Town, Ludhiana, Punjab 141002, India</p>
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalExemplo">
                                        <i class="ti-pencil-alt mr-2"></i> Editar
                                      </button>
                                    <a href="#" class="btn btn-outline-danger"><i class="ti-trash mr-2"></i> Deletar</a>
                                </div>
                            </div>

                        </div>
                        <!-- Modal Address-->
                        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="historico-pedidos" role="tabpanel" aria-labelledby="historico-pedidos-tab">
                        <h4 class="text-center">HISTÓRICO DE PEDIDOS</h4>
                        <hr>
                        <div class="col">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Data</th>
                                        <th scope="col">Hora</th>
                                        <th scope="col">Ref</th>
                                        <th scope="col" colspan="2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach from=$PEDIDOS item=P}
                                    <tr>
                                        <th scope="row">{$P.ped_data} </th>
                                        <td>{$P.ped_hora}</td>
                                        <td>{$P.ped_ref}</td>
                                        <td>Aguardando Pagamento</td>
                                        <td>
                                            <form method="POST" action="{$DETALHES_PEDIDOS}">
                                                <input type="hidden" name="cod_pedido" value="{$P.ped_cod}">
                                                <button type="submit" class="btn btn-outline-primary">
                                                    <i class="ti-menu mr-2"></i> Detalhes
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="configuracoes" role="tabpanel" aria-labelledby="configuracoes-tab">
                        <h4 class="text-center">MINHAS CONFIGURAÇÕES</h4>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>