<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-28 00:14:35
  from 'C:\xampp\htdocs\jvhookah\view\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e584d5b1a3004_20242149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f94d8e2b00e6959a64e94fd6d85cc556990928f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\contact.tpl',
      1 => 1582845273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e584d5b1a3004_20242149 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <span>Contato</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Map Section Begin -->
<div class="map spad">
    <div class="container">
        <div class="map-inner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.2923609220284!2d-46.47759788447571!3d-23.557941067352402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66e2e2bd0cf7%3A0xfb681256b68fec36!2sAv.%20Maria%20Luiza%20Americano%2C%202806%20-%20Cidade%20L%C3%ADder%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008280-090!5e0!3m2!1spt-BR!2sbr!4v1582756938137!5m2!1spt-BR!2sbr"
                width="610" height="450" frameborder="0" style="border:0;" allowfullscreen="">
            
            </iframe>
            <div class="icon">
                <i class="fa fa-map-marker"></i>
            </div>
        </div>
    </div>
</div>
<!-- Map Section Begin -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-title">
                    <h4>Contato</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki years old.</p>
                </div>
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="ci-text">
                            <span>Endereço:</span>
                            <p>Av. Maria Luiza Americano, 2806</p>
                            <p>Cidade Líder - São Paulo/SP</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="ci-text">
                            <span>Phone:</span>
                            <p><a class="nav-link" id="apiwhatsapp" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=5511940249845">+55 11 94024-9845</a> </p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="ci-text">
                            <span>Email:</span>
                            <p>hellocolorlib@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="contact-form">
                    <div class="leave-comment">
                        <h4>Envie uma mensagem</h4>
                        <p>Nossa equipe entrará em contato o mais rápido possível para responder suas perguntas.</p>
                        <form action="envio" method="get" class="comment-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input name="nome" id="nome" type="text" placeholder="Seu nome" required>
                                </div>
                                <div class="col-lg-6">
                                    <input name="email" id="email" type="email" placeholder="Seu email" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="mensagem" id="mensagem" placeholder="Sua mensagem" required></textarea>
                                    <button type="submit" class="site-btn">Enviar mensagem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End --><?php }
}
