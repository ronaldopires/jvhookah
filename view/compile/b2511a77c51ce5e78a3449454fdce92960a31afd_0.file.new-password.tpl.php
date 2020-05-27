<?php
/* Smarty version 3.1.36, created on 2020-05-25 05:28:03
  from 'C:\xampp\htdocs\jvhookah\view\new-password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ecb3b43287466_53137555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2511a77c51ce5e78a3449454fdce92960a31afd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\new-password.tpl',
      1 => 1590377177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecb3b43287466_53137555 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Nova Senha</h2>
                    <form method="POST">
                        <div class="group-input">
                            <label for="cli_email">Email *</label>
                            <input type="email" name="cli_email" id="cli_email" placeholder="Digite seu e-mail..." required>
                        </div>
                        <div class="group-input">
                            <label for="cli_nova_senha">Nova Senha *</label>
                            <input type="password" name="cli_nova_senha" id="cli_nova_senha" placeholder="Digite nova sua senha..." required>
                        </div>
                        <div class="group-input">
                            <label for="cli_con_nova_senha">Repita Nova Senha *</label>
                            <input type="password" name="cli_con_nova_senha" id="cli_con_nova_senha" placeholder="Confirme sua nova senha..." required>
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
