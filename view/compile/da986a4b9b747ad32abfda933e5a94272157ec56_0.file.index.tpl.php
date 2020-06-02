<?php
/* Smarty version 3.1.36, created on 2020-06-02 16:55:27
  from 'C:\xampp\htdocs\jvhookah\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed6aeafac6ff9_86806428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da986a4b9b747ad32abfda933e5a94272157ec56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\index.tpl',
      1 => 1591127721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6aeafac6ff9_86806428 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="JH Hookah Lounge">
    <meta name="keywords" content="arguiles, narguiles, rochi, essencias, carvão, pegador, fogareiro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/img/favicon.ico" type="image/x-icon">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/style.css" type="text/css">
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
                    <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == TRUE) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOUT']->value;?>
" class="login-panel"><i class="fa fa-user"></i>Logout</a> <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
" class="login-panel"><i class="fa fa-user"></i>Login</a> <?php }?>
                    <!-- <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/flag-2.jpg" data-imagecss="flag yu"
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
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
">
                                <img height=" 40" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/jv_logo.jpg" alt="">
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
                            <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == TRUE) {?>
                            <li class="text-left">
                                <div class="row no-gutters" style="font-size: 14px;">
                                    <div class="col">
                                        <img class="img img-responsive img_profile" src="<?php echo $_smarty_tpl->tpl_vars['FOTO']->value;?>
" alt="Foto Perfil" />
                                    </div>
                                    <div class="col ml-3">
                                        <span style="line-height: 40px;"><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</span>
                                    </div>
                                </div>
                            </li>
                            <?php }?>
                            <li class="heart-icon">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['FAVORITOS']->value;?>
">
                                    <i class="icon_heart_alt"></i>
                                    <span><?php echo $_smarty_tpl->tpl_vars['ITENS_FAVORITOS']->value;?>
</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span><?php echo $_smarty_tpl->tpl_vars['ITENS_CARRINHO']->value;?>
</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <?php if ($_smarty_tpl->tpl_vars['CARRINHO']->value == true) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CARRINHO']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                                                <tr>
                                                    <td class="si-pic"><img width="150" src="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_img'];?>
" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>R$ <?php echo $_smarty_tpl->tpl_vars['C']->value['pro_valor'];?>
 X <?php echo $_smarty_tpl->tpl_vars['C']->value['pro_qtd'];?>
</p>
                                                            <h6><?php echo $_smarty_tpl->tpl_vars['C']->value['pro_nome'];?>
</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_ALTERAR_CARRINHO']->value;?>
" method="post">
                                                            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['pro_id'];?>
">
                                                            <input type="hidden" name="acao" value="del">
                                                            <button class="btn"><i class="ti-close"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php } else { ?>
                                                <p>Você não possui produtos no seu carrinho.</p>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>R$ <?php echo $_smarty_tpl->tpl_vars['VALOR_TOTAL']->value;?>
</h5>
                                    </div>
                                    <div class="select-button">
                                        <!-- <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SHOP']->value;?>
" class="primary-btn view-card">VER PRODUTOS</a> -->
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="primary-btn checkout-btn">FINALIZAR PEDIDO</a>
                                    </div>
                                </div>
                            </li>
                            <!-- <li class="cart-price">R$ <?php echo $_smarty_tpl->tpl_vars['VALOR_TOTAL']->value;?>
</li> -->
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
                            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Todos os Produtos</a></li>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
/sub_categoria/<?php echo $_smarty_tpl->tpl_vars['C']->value['sub_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['sub_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['sub_nome'];?>
</a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
">Home</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Produtos</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_BLOG']->value;?>
">Blog</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Contato</a></li>
                        <li><a href="#">Páginas</a>
                            <ul class="dropdown">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_BLOG']->value;?>
">Blog</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">Carrinho</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR_PEDIDO']->value;?>
">Finalizar Pedido</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PERGUNTAS_FREQUENTES']->value;?>
">Perguntas Frequentes</a></li>
                                <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == false) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
">Cadastre-se</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
">Login</a></li>
                                <?php } else { ?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PERFIL']->value;?>
">Meu Perfil</a></li>
                                <?php }?>
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
    <?php  Rotas::getPagina(); ?>
    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/logo-carousel/Logo_triton_horizontal.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/logo-carousel/logo-5.png" alt="">
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
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/logo-carousel/jvhk2.png" alt=""></a>
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
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
">Cadastre-se</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Fale Conosco</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Produtos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Meu Perfil</h5>
                        <ul>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PERFIL']->value;?>
">Meu Perfil</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">Meu Carrinho</a></li>
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
                            <?php echo '<script'; ?>
>
                                document.write(new Date().getFullYear());
                            <?php echo '</script'; ?>
> All rights reserved | by <a href="https://github.com/ronaldopires" target="_blank">Ronaldo Carvalho</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/payment-method.png" alt="">
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
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/script.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js"><?php echo '</script'; ?>
> -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery.countdown.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery.nice-select.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery.zoom.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery.dd.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery.slicknav.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/main.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
