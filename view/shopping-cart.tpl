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
                                                <button class="btn menos"><i class="ti-minus"></i></button>
                                            </form>
                                            <form action="{$PAG_SHOPPING_ALTER}" method="post">
                                                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                                <input type="hidden" name="pro_qtd" value="{$P.pro_qtd}">
                                                <input type="hidden" name="acao" value="quantidade">
                                                <input class="form-control resultado" min="1" name="pro_qtd" type="text" value="{$P.pro_qtd}">
                                            </form>
                                            <!-- Adiciona uma unidade -->
                                            <form name="form_add" action="{$PAG_SHOPPING_ALTER}" method="post">
                                                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                                                <input type="hidden" name="acao" value="add">
                                                <button class="btn mais"><i class="ti-plus"></i></button>
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
                            <form id="formCep" class="discount-coupon" action="{$PAG_CHECKOUT}" method="POST">
                                <ul>
                                    <li class="subtotal">Subtotal <span>R$ {$TOTAL}</span></li>
                                    <li class="subtotal cart-total">Frete <span><button type="button" class="site-btn coupon-btn" id="btnCep">A calcular</button></span></li>
                                    <li class="" id="divCep">
                                        <div class="form-group row no-gutters my-2 coupon-form">
                                            <input type="hidden" name="peso_frete" id="peso_frete" value="2">
                                            <input type="hidden" name="frete_valor" id="frete_valor">
                                            <input type="text" name="cep_frete" id="cep_cli" maxlength="8" placeholder="Digite seu cep" required/>
                                            <button type="button" id="btnCalcularCep" class="site-btn coupon-btn">Calcular</button>
                                        </div>
                                        <p class="float-left" id="message"></p>
                                    </li>
                                    <li class="subtotal" id="resultCep">
                                        <span class="col" id="frete"></span>
                                    </li>
                                    <li class="cart-total">Total <span>R$ {$TOTAL}</span></li>
                                </ul>
                                <button class="proceed-btn btn btn-block">FINALIZAR PEDIDO</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->