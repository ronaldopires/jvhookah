<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-28 00:01:44
  from 'C:\xampp\htdocs\jvhookah\view\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e584a58902da5_46982227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a91142ae1f2d6d148ad3e0c538afa8985eed09b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\register.tpl',
      1 => 1582844503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e584a58902da5_46982227 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <span>Register</span>
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
                <div class="register-form">
                    <h2>Register</h2>
                    <form action="#">
                        <div class="group-input">
                            <label for="username">Seu email *</label>
                            <input type="text" id="username">
                        </div>
                        <div class="group-input">
                            <label for="pass">Senha *</label>
                            <input type="text" id="pass">
                        </div>
                        <div class="group-input">
                            <label for="con-pass">Confirme a senha *</label>
                            <input type="text" id="con-pass">
                        </div>
                        <button type="submit" class="site-btn register-btn">Criar Conta</button>
                    </form>
                    <div class="switch-login">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
" class="or-login">Faça Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End --><?php }
}
