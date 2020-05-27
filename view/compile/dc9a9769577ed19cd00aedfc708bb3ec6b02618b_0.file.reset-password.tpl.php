<?php
/* Smarty version 3.1.36, created on 2020-05-20 22:00:52
  from 'C:\xampp\htdocs\jvhookah\view\reset-password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec58c74d26379_64007064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc9a9769577ed19cd00aedfc708bb3ec6b02618b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\reset-password.tpl',
      1 => 1590004848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec58c74d26379_64007064 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Alterar Senha</h2>
                    <form method="POST">
                        <div class="group-input">
                            <label for="cli_email">Email *</label>
                            <input type="email" name="cli_email" id="cli_email" required>
                        </div>
                        <div class="group-input">
                            <label for="cli_senha">Senha *</label>
                            <input type="password" name="cli_senha" id="cli_senha" required>
                        </div>
                        <div class="group-input">
                            <label for="cli_con_senha">Confirme a Senha *</label>
                            <input type="password" name="cli_con_senha" id="cli_con_senha" required>
                        </div>
                        <button type="submit" class="site-btn login-btn">Alterar Senha</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End --><?php }
}
