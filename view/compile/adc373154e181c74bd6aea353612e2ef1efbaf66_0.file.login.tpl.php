<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-28 00:04:04
  from 'C:\xampp\htdocs\jvhookah\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e584ae4bf4832_22267271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adc373154e181c74bd6aea353612e2ef1efbaf66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\login.tpl',
      1 => 1582844644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e584ae4bf4832_22267271 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <span>Login</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Form Section Begin -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="#">
                        <div class="group-input">
                            <label for="username">Email *</label>
                            <input type="text" id="username">
                        </div>
                        <div class="group-input">
                            <label for="pass">Senha *</label>
                            <input type="text" id="pass">
                        </div>
                        <div class="group-input gi-check">
                            <div class="gi-more">
                                <label for="save-pass">
                                    Lembrar senha
                                    <input type="checkbox" id="save-pass">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="#" class="forget-pass">Esqueci minha senha</a>
                            </div>
                        </div>
                        <button type="submit" class="site-btn login-btn">Entrar</button>
                    </form>
                    <div class="switch-login">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_REGISTER']->value;?>
" class="or-login">Cadastre-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End --><?php }
}
