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
            <form action="{$PAG_ALTERAR_CARRINHO}" method="post">
                <input type="hidden" name="pro_id" value="1">
                <input type="hidden" name="acao" value="limpar">
                <button class="btn btn-warning md-mx-2 col-sm-6 col-md-2 col-lg-2">Remover</button>
                <button type="button" class="closeAlert btn bg-white col-sm-2 col-md-2 col-lg-2">Cancelar</button>
            </form>
        </div>
    </div>
</div>
<!--Alerta Remover um item-->
<div class="row no-gutters justify-content-center">
    <div class="container">
        <div id="alertRemoveItem" class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <p class="">Tem certeza que deseja remover esse item do seu carrinho ?</p>
            <form action="{$PAG_ALTERAR_CARRINHO}" method="post">
                {foreach from=$PRO item=P}
                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                <input type="hidden" name="acao" value="del"> {/foreach}
                <button class="btn btn-warning md-mx-2 col-sm-2 col-md-2 col-lg-2">Remover</button>
                <button type="button" class="closeAlert btn bg-white col-sm-2 col-md-2 col-lg-2">Cancelar</button>
            </form>
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
                                    <button id="btnRemoveAll" class="btn "><i class="ti-close"></i></button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$PRO item=P}
                            <tr>
                                <td class="cart-pic first-row"><img width="150" src="{$P.pro_img}" alt="{$P.pro_nome}"></td>
                                <td class="cart-title first-row">
                                    <a href="{$PAG_DETALHES_PRODUTO}/{$P.pro_slug}/{$P.pro_id}">
                                        <h5>{$P.pro_nome} {$P.pro_cor}
                                        </h5>
                                    </a>
                                </td>
                                <td class="p-price first-row">R$ {$P.pro_valor}</td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <!--Remover uma unidade-->
                                            <form action="{$PAG_ALTERAR_CARRINHO}" method="post">
                                                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                                <input type="hidden" name="pro_qtd" value="{$P.pro_qtd}">
                                                <input type="hidden" name="acao" value="remover">
                                                <button class="btn menos"><i class="ti-minus"></i></button>
                                            </form>
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
                                                <button class="btn mais"><i class="ti-plus"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price first-row">R$ {$P.pro_subTotal}</td>
                                <td class="close-td first-row">
                                    <button class="btn btnRemoveItem"><i class="ti-close"></i></button>
                                </td>
                            </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cart-buttons">
                            <a href="{$PAG_PRODUTOS}" class="primary-btn continue-shop">Continue Comprando</a>
                            <!-- <a href="#" class="primary-btn up-cart">Atualizar Carrinho</a> -->
                        </div>
                        <div class="discount-coupon">
                            <h6>Cupom de Desconto</h6>
                            <form action="#" class="coupon-form">
                                <input type="text" placeholder="Digite o código do seu cupom">
                                <button type="submit" class="site-btn coupon-btn">Adicionar</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2">

                        <div class="proceed-checkout">
                            <form id="formCep" class="discount-coupon" action="{$PAG_FINALIZAR_PEDIDO}" method="POST">
                                <ul>
                                    <li class="subtotal">Subtotal <span>R$ {$TOTAL}</span></li>
                                    <li class="subtotal cart-total">
                                        <b style="line-height: 47px;">Frete</b> <span><input type="button" name="btn-calc" class="site-btn coupon-btn" id="btnCep" required value=" A calcular" /></span></li>
                                    <li class="mt-3" id="divCep">
                                        <div class="form-group row no-gutters my-2 coupon-form">
                                            {foreach from=$PRO item=P}
                                            <input type="hidden" name="peso_frete" id="peso_frete" value="{$PESO}">
                                            <input type="hidden" name="largura_frete" id="largura_frete" value="{$P.pro_largura}">
                                            <input type="hidden" name="altura_frete" id="altura_frete" value="{$P.pro_altura}">
                                            <input type="hidden" name="comprimento_frete" id="comprimento_frete" value="{$P.pro_comprimento}"> {/foreach}
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