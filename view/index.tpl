<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="JH Hookah Lounge">
    <meta name="keywords" content="arguiles, narguiles, rochi, essencias, carvão, pegador, fogareiro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{$TITULO_SITE}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content permission">
                <div class="modal-body permission_text">
                    <div class="col">
                        <p>Você é maior de 18 anos ?</p>
                    </div>
                    <div class="col">
                        <button type="button" id="yes" class="btn btn-success" data-dismiss="modal">SIM</button>
                        <button type="button" id="no" class="btn btn-danger" data-dismiss="modal">NÃO</button>
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
                        <i class=" fa fa-envelope"></i> hello.colorlib@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i><a id="apiwhatsapp" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=5511940249845">+55 11 94024-9845</a>
                    </div>
                </div>
                <div class="ht-right">
                    <a href="{$PAG_LOGIN}" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value='yt' data-image="{$GET_TEMA}/img/flag-1.jpg" data-imagecss="flag yt"
                        data-title="English">English</option>
                        <option value='yu' data-image="{$GET_TEMA}/img/flag-2.jpg" data-imagecss="flag yu"
                        data-title="Bangladesh">German </option>
                        </select>
                    </div>
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
                            <button type="button" id="categories" class="category-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Todas Categorias</button>
                            <div class="dropdown-menu" aria-labelledby="categories">
                                <a class="dropdown-item" href="#">Kit Completo</a>
                                <a class="dropdown-item" href="#">Abafadores</a>
                                <a class="dropdown-item" href="#">Carvões</a>
                                <a class="dropdown-item" href="#">Pratos</a>
                                <a class="dropdown-item" href="#">Essências</a>
                                <a class="dropdown-item" href="#">Carvões</a>
                                <a class="dropdown-item" href="#">Carvões</a>
                            </div>
                            <div class="input-group">
                                <input type="text" placeholder="O que está procurando?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
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
                                                        <form action="{$PAG_SHOPPING_ALTER}" method="post">
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
                                        <a href="{$PAG_SHOP}" class="primary-btn view-card">VER PRODUTOS</a>
                                        <a href="{$PAG_SHOPPING_CART}" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">R$ {$VALOR_TOTAL}</li>
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
                            <li class="active"><a href="#">Kits Completos</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{$PAG_HOME}">Home</a></li>
                        <li><a href="{$PAG_SHOP}">Produtos</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="{$PAG_CONTACT}">Contato</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.html">Blog Details</a></li>
                                <li><a href="{$PAG_SHOPPING_CART}">Shopping Cart</a></li>
                                <li><a href="{$PAG_CHECK_OUT}">Checkout</a></li>
                                <li><a href="{$PAG_FAQ}">Faq</a></li>
                                <li><a href="{$PAG_REGISTER}">Register</a></li>
                                <li><a href="{$PAG_LOGIN}">Login</a></li>
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
    {php} Rotas::get_Pagina(); {/php}
    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{$GET_TEMA}/img/logo-carousel/logo-1.png" alt="">
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
                            <a href="#"><img src="{$GET_TEMA}/img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Endereço: Av. Maria Luiza Americano, 2806</li>
                            <li>Phone: +55 11 94024-9845</li>
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
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contato</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Coloque seu email">
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
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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

    <!-- Js Plugins -->
    <script src="{$GET_TEMA}/tema/js/jquery-3.3.1.min.js"></script>
    <script src="{$GET_TEMA}/tema/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> -->
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