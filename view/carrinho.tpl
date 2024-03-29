<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <a href="{$PAG_PRODUTOS}">Produtos</a>
                    <span>Meu Carrinho</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!--Alerta Remover Todos os Itens-->
<div class="row no-gutters justify-content-center">
    <div class="container">
        <div id="alertRemoveAll" class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <p class="">Tem certeza que deseja remover <strong>TODOS</strong> os itens do seu carrinho ?</p>
            <div class="col p-0">
                <form action="{$PAG_ALTERAR_CARRINHO}" method="post">
                    <input type="hidden" name="pro_id" value="1">
                    <input type="hidden" name="acao" value="limpar">
                    <div class="row justify-content-center">
                        <div class="col-md-3 col-sm-6">
                            <button class="site-btn-danger btn-block" title="Remover todos os itens">Remover</button>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <button type="button" class="closeAlert site-btn btn-block" title="Cancelar remoção">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table table-responsive sm-invisible">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th class="p-name">Nome do Produto</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Total</th>
                                <th>
                                    <button id="btnRemoveAll" class="btn "><i class="ti-close" title="Remover todos os itens"></i></button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$PRO item=P}
                            <tr>
                                <td class="cart-pic first-row"><img width="150" src="{$P.pro_img_p}" alt="{$P.pro_nome}" title="{$P.pro_nome}"></td>
                                <td class="cart-title first-row">
                                    <a href="{$PAG_DETALHES_PRODUTO}/{$P.pro_slug}/{$P.pro_id}">
                                        <h5 title="{$P.pro_nome}">{$P.pro_nome} {$P.pro_cor}
                                        </h5>
                                    </a>
                                </td>
                                <td class="p-price first-row" title="Valor {$P.pro_valor}">R$ {$P.pro_valor}</td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty row">
                                            <!--Remover uma unidade-->
                                            <form action="{$PAG_ALTERAR_CARRINHO}" method="post">
                                                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                                <input type="hidden" name="pro_qtd" value="{$P.pro_qtd}">
                                                <input type="hidden" name="acao" value="remover">
                                                <button class="btn menos"><i class="ti-minus" title="Remover Unidade"></i></button>
                                            </form>
                                            <!--Quantidade-->
                                            <form action="{$PAG_ALTERAR_CARRINHO}" method="post">
                                                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                                <input type="hidden" name="pro_qtd" value="{$P.pro_qtd}">
                                                <input type="hidden" name="acao" value="quantidade">
                                                <input class="form-control resultado" min="1" name="pro_qtd" type="text" value="{$P.pro_qtd}">
                                            </form>
                                            <!-- Adiciona uma unidade -->
                                            <form name="form_add" action="{$PAG_ALTERAR_CARRINHO}" method="post">
                                                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                                <input type="hidden" name="acao" value="add">
                                                <button class="btn mais"><i class="ti-plus" title="Adicionar Unidade"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price first-row">R$ {$P.pro_subTotal}</td>
                                <td class="close-td first-row">
                                    <button class="btn btnRemoveItem" data-toggle="modal" data-target="#nome{$P.pro_id}" title="Remover Item"><i class="ti-close"></i></button>
                                </td>
                                <!-- Modal -->
                                <div class="col-auto p-0">
                                    <div class="modal fade" id="nome{$P.pro_id}" tabindex="-1" role="dialog" aria-labelledby="modalRemoverProduto" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalRemoverProduto">{$P.pro_nome}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <p class="text-danger">Tem certeza que deseja remover esse item do seu carrinho ? </p>
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <form action="{$PAG_ALTERAR_CARRINHO}" method="post">
                                                        <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                                        <input type="hidden" name="acao" value="del">
                                                        <div class="col">
                                                            <button class="site-btn-danger btn-block" title="Remover Item">Remover</button>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button" class="closeAlert site-btn btn-block" data-dismiss="modal" title="Cancelar remoção">Cancelar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cart-buttons">
                            <a href="{$PAG_PRODUTOS}" class="primary-btn continue-shop" title="Continue comprando">Continue Comprando</a>
                            <!-- <a href="#" class="primary-btn up-cart">Atualizar Carrinho</a> -->
                        </div>
                        <div class="discount-coupon">
                            <h6>Cupom de Desconto</h6>
                            <form action="" method="POST" class="coupon-form">
                                <input name="cupom_cliente" type="text" value="{$CUPOM_CLI}" id="cupom_cliente" placeholder="Digite o código do seu cupom" autocomplete="off" title="Código do cupom" required />
                                <button type="submit" id="add_cupom" class="site-btn coupon-btn" title="Adicionar  cupom">Adicionar</button>
                            </form>
                        </div>
                        {if $CUPOM == true}
                        <div class="col-auto p-0">
                            <div class="card text-center">
                                <div class="card-header text-right bg-white">
                                    <form action="" method="POST">
                                        <span title="Remover cupom">Remover Cupom </span><button class="btn" name="removerCupom" title="Remover cupom"><i class="ti-close"></i></button>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-success">Cupom Aplicado com sucesso</h5>
                                    <p class="card-text">Valor do desconto <b>R$ -<span>{$VALOR}</b></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        {/if}
                    </div>
                    <div class="col-lg-5 offset-lg-2">

                        <div class="proceed-checkout">
                            <form id="formCep" class="discount-coupon" action="{$PAG_FINALIZAR_PEDIDO}" method="POST">
                                <ul>
                                    <li class="subtotal">Subtotal <span>R$ {$TOTAL}</span></li>
                                    <li class="subtotal cart-total">
                                        <b style="line-height: 47px;">Frete</b> <span><input type="button" name="btn-calc" class="site-btn coupon-btn" id="btnCep" required value=" A calcular" title="Calcular frete" /></span></li>
                                    <li class="mt-3" id="divCep">
                                        <div class="form-group row no-gutters my-2 coupon-form">
                                            {foreach from=$PRO item=P}
                                            <input type="hidden" name="peso_frete" id="peso_frete" value="{$PESO}">
                                            <input type="hidden" name="largura_frete" id="largura_frete" value="{$P.pro_largura}">
                                            <input type="hidden" name="altura_frete" id="altura_frete" value="{$P.pro_altura}">
                                            <input type="hidden" name="comprimento_frete" id="comprimento_frete" value="{$P.pro_comprimento}"> {/foreach}
                                            <!-- Valor CEP-->
                                            <input type="hidden" name="frete_valor" id="frete_valor"> {if $LOGADO == true}
                                            <input type="text" name="cep_frete" id="cep_cli" maxlength="8" placeholder="Digite seu cep" value="{$CEP}" required/> {else}
                                            <input type="text" name="cep_frete" id="cep_cli" maxlength="8" placeholder="Digite seu cep" autofocus required/> {/if}
                                            <button type="button" id="btnCalcularCep" class="site-btn coupon-btn">Calcular</button>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="float-left" id="message"></p>
                                    </li>
                                    <li class="subtotal" id="resultCep">
                                        <span id="frete"></span>
                                    </li>
                                    <li class="cart-total">Total <span>R$ {$TOTAL}</span></li>
                                </ul>
                                <button id="btn-finalizar" class="proceed-btn btn btn-block">FINALIZAR PEDIDO</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->