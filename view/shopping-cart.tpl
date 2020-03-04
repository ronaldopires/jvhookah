<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <a href="{$PAG_PRODUTOS}">Produtos</a>
                    <span>Fechar Pedido</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th class="p-name">Nome do Produto</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Total</th>
                                <th>
                                    <form action="{$PAG_SHOPPING_ALTER}" method="post">
                                        <input type="hidden" name="pro_id" value="1">
                                        <input type="hidden" name="acao" value="limpar">
                                        <button class="btn"><i class="ti-close"></i></button>
                                    </form>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$PRO item=P}
                            <tr>
                                <td class="cart-pic first-row"><img width="150" src="{$P.pro_img}" alt="{$P.pro_nome}"></td>
                                <td class="cart-title first-row">
                                    <a href="{$PRODUTOS_INFO}/{$P.pro_id}">
                                        <h5>{$P.pro_nome} {$P.pro_cor_selected}</h5>
                                    </a>
                                </td>
                                <td class="p-price first-row">R$ {$P.pro_valor}</td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <form action="{$PAG_SHOPPING_ALTER}" method="post">
                                                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                                <input type="hidden" name="pro_qtd" value="{$P.pro_qtd}">
                                                <input type="hidden" name="acao" value="remover">
                                                <button id="menos" class="btn"><i class="ti-minus"></i></button>
                                            </form>
                                            <form action="{$PAG_SHOPPING_ALTER}" method="post">
                                                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                                <input type="hidden" name="pro_qtd" value="{$P.pro_qtd}">
                                                <input type="hidden" name="acao" value="quantidade">
                                                <input id="resultado" class="form-control" min="1" name="pro_qtd" type="text" value="{$P.pro_qtd}">
                                            </form>
                                            <!-- Adiciona uma unidade -->
                                            <form name="form_add" action="{$PAG_SHOPPING_ALTER}" method="post">
                                                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                                <input type="hidden" name="acao" value="add">
                                                <button id="mais" class="btn"><i class="ti-plus"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price first-row">R$ {$P.pro_subTotal}</td>
                                <td class="close-td first-row">
                                    <form action="{$PAG_SHOPPING_ALTER}" method="post">
                                        <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                        <input type="hidden" name="acao" value="del">
                                        <button class="btn"><i class="ti-close"></i></button>
                                    </form>
                                </td>
                            </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cart-buttons">
                            <a href="{$PAG_SHOP}" class="primary-btn continue-shop">Continue Comprando</a>
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
                            <ul>
                                <li class="subtotal">Subtotal <span>R$ {$TOTAL}</span></li>
                                <li class="subtotal">Frete <span><a href="#cep"> A calcular </a></span></li>
                                <li class="subtotal">
                                    <div class="row no-gutters my-2 justify-content-end">
                                        <form name="cepform" id="cepform" class="form-inline" action="">
                                            <input class="form-control" type="text" name="cep" id="cep" placeholder="Digite seu cep">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-success input-group ml-2">calcular</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="subtotal">
                                    <div class="col" id="frete">

                                    </div>
                                </li>
                                <li class="cart-total">Total <span>R$ {$TOTAL}</span></li>
                            </ul>
                            <a href="#" class="proceed-btn">FINALIZAR PEDIDO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->