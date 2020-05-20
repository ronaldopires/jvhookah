<?php
/* Smarty version 3.1.36, created on 2020-05-19 18:50:01
  from 'C:\xampp\htdocs\jvhookah\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec40e39827487_97910196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adc373154e181c74bd6aea353612e2ef1efbaf66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\login.tpl',
      1 => 1589906795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec40e39827487_97910196 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <form method="POST">
                        <div class="group-input">
                            <label for="username">Email *</label>
                            <input type="email" name="email" id="username" required>
                        </div>
                        <div class="group-input">
                            <label for="pass">Senha *</label>
                            <input type="password" name="senha" id="pass" required>
                        </div>
                        <div class="group-input gi-check">
                            <div class="gi-more">
                                <label for="save-pass">
                                    Lembrar senha
                                    <input type="checkbox" id="save-pass">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['PASS_RESET']->value;?>
" class="forget-pass">Esqueci minha senha</a>
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
