<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="JH Hookah Lounge">
    <meta name="keywords" content="arguiles, narguiles, rochi, essencias, carvão, pegador, fogareiro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{$TITULO_SITE}</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="{$GET_TEMA}/tema/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{$GET_TEMA}/tema/img/favicon.ico" type="image/x-icon">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Modal -->
    <div class="modal fade" id="modalIdade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content permission">
                <div class="modal-body permission_text">
                    <div class="col">
                        <p>Você é maior de 18 anos ?</p>
                    </div>
                    <div class="col">
                        <button type="button" id="maior" class="btn btn-success" data-dismiss="modal">SIM</button>
                        <button type="button" id="menor" class="btn btn-danger" data-dismiss="modal">NÃO</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i> ronaldo.carvalho@hotmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i><a id="apiwhatsapp" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=5511940249845">+55 11 94024-9845</a>
                    </div>
                </div>
                <div class="ht-right">
                    {if $LOGADO == TRUE}
                    <a href="{$PAG_LOGOUT}" class="login-panel"><i class="fa fa-user"></i>Logout</a> {else}
                    <a href="{$PAG_LOGIN}" class="login-panel"><i class="fa fa-user"></i>Login</a> {/if}
                    <!-- <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="{$GET_TEMA}/img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="{$GET_TEMA}/img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div> -->
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="{$PAG_HOME}">
                                <img height=" 40" src="{$GET_TEMA}/img/jv_logo.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search dropdown">
                            <!-- <button type="button" id="categories" class="category-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Todas Categorias</button>
                            <div class="dropdown-menu" aria-labelledby="categories">
                                <a class="dropdown-item" href="#">Kit Completo</a>
                                <a class="dropdown-item" href="#">Abafadores</a>
                                <a class="dropdown-item" href="#">Carvões</a>
                                <a class="dropdown-item" href="#">Pratos</a>
                                <a class="dropdown-item" href="#">Essências</a>
                                <a class="dropdown-item" href="#">Carvões</a>
                                <a class="dropdown-item" href="#">Carvões</a>
                            </div> -->
                            <div class="input-group">
                                <input type="text" placeholder="O que está procurando ?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            {if $LOGADO == TRUE}
                            <li class="text-left">
                                <div class="row no-gutters" style="font-size: 14px;">
                                    <div class="col">
                                        <img class="img img-responsive img_profile" src="{$FOTO}" alt="Foto Perfil" />
                                    </div>
                                    <div class="col ml-3">
                                        <span style="line-height: 40px;">{$USER}</span>
                                    </div>
                                </div>
                            </li>
                            {/if}
                            <li class="heart-icon">
                                <a href="{$FAVORITOS}">
                                    <i class="icon_heart_alt"></i>
                                    <span>{$ITENS_FAVORITOS}</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>{$ITENS_CARRINHO}</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                {if $CARRINHO == true} {foreach from=$CARRINHO item=C}
                                                <tr>
                                                    <td class="si-pic"><img width="150" src="{$C.pro_img}" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>R$ {$C.pro_valor} X {$C.pro_qtd}</p>
                                                            <h6>{$C.pro_nome}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <form action="{$PAG_ALTERAR_CARRINHO}" method="post">
                                                            <input type="hidden" name="pro_id" value="{$C.pro_id}">
                                                            <input type="hidden" name="acao" value="del">
                                                            <button class="btn"><i class="ti-close"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                {/foreach} {else}
                                                <p>Você não possui produtos no seu carrinho.</p>
                                                {/if}
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>R$ {$VALOR_TOTAL}</h5>
                                    </div>
                                    <div class="select-button">
                                        <!-- <a href="{$PAG_SHOP}" class="primary-btn view-card">VER PRODUTOS</a> -->
                                        <a href="{$PAG_CARRINHO}" class="primary-btn checkout-btn">FINALIZAR PEDIDO</a>
                                    </div>
                                </div>
                            </li>
                            <!-- <li class="cart-price">R$ {$VALOR_TOTAL}</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Produtos</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="{$PAG_PRODUTOS}">Todos os Produtos</a></li>
                            {foreach $CATEGORIAS item=C}
                            <li><a href="{$PAG_PRODUTOS}/sub_categoria/{$C.sub_id}/{$C.sub_slug}">{$C.sub_nome}</a></li>
                            {/foreach}
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class=""><a href="{$PAG_HOME}">Home</a></li>
                        <li><a href="{$PAG_PRODUTOS}">Produtos</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="{$PAG_BLOG}">Blog</a></li>
                        <li><a href="{$PAG_CONTATO}">Contato</a></li>
                        <li><a href="#">Páginas</a>
                            <ul class="dropdown">
                                <li><a href="{$PAG_BLOG}">Blog</a></li>
                                <li><a href="{$PAG_CARRINHO}">Carrinho</a></li>
                                <li><a href="{$PAG_FINALIZAR_PEDIDO}">Finalizar Pedido</a></li>
                                <li><a href="{$PAG_PERGUNTAS_FREQUENTES}">Perguntas Frequentes</a></li>
                                {if $LOGADO == false}
                                <li><a href="{$PAG_CADASTRO}">Cadastre-se</a></li>
                                <li><a href="{$PAG_LOGIN}">Login</a></li>
                                {else}
                                <li><a href="{$PAG_PERFIL}">Meu Perfil</a></li>
                                {/if}
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!--Rotas de páginas -->
    {php} Rotas::getPagina(); {/php}
    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{$GET_TEMA}/img/logo-carousel/Logo_triton_horizontal.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{$GET_TEMA}/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{$GET_TEMA}/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{$GET_TEMA}/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{$GET_TEMA}/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="{$PAG_HOME}"><img src="{$GET_TEMA}/img/logo-carousel/jvhk2.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Endereço: Av. Maria Luiza Americano, 2806</li>
                            <li>WhatsApp: +55 11 94024-9845</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Informações</h5>
                        <ul>
                            <li><a href="#">Sobre</a></li>
                            <li><a href="{$PAG_CADASTRO}">Cadastre-se</a></li>
                            <li><a href="{$PAG_CONTACT}">Fale Conosco</a></li>
                            <li><a href="{$PAG_PRODUTOS}">Produtos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Meu Perfil</h5>
                        <ul>
                            <li><a href="{$PAG_PROFILE}">Meu Perfil</a></li>
                            <li><a href="{$PAG_SHOPPING_CART}">Meu Carrinho</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Inscreva-se na nossa newsletter agora</h5>
                        <p>Receba atualizações por e-mail sobre nossa loja mais recente e ofertas especiais.</p>
                        <form action="#" class="subscribe-form">
                            <input type="email" placeholder="Digite seu email">
                            <button type="button">Inscreva-se</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | by <a href="https://github.com/ronaldopires" target="_blank">Ronaldo Carvalho</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="{$GET_TEMA}/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Whatsapp contato-->
    <a href="https://api.whatsapp.com/send?phone=5511940249845" title="Entre em contato via WhatsApp" target="_blank" class="whatsFixo"><i class="fa fa-lg fa-whatsapp"></i></a>

    <a href="#top"><i class="fa fa-angle-up"></i></a>


    <!-- Js Plugins -->
    <script src="{$GET_TEMA}/tema/js/jquery-3.3.1.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- <script src="{$GET_TEMA}/tema/js/bootstrap.min.js"></script> -->
    <script src="{$GET_TEMA}/tema/js/jquery-ui.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/jquery.countdown.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/jquery.nice-select.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/jquery.zoom.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/jquery.dd.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/jquery.slicknav.js"></script>
    <script src="{$GET_TEMA}/tema/js/owl.carousel.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/main.js"></script>
</body>

</html>