<?php
/* Smarty version 3.1.36, created on 2020-06-19 02:20:22
  from 'C:\xampp\htdocs\jvhookah\view\recuperar-senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eec4b1692f946_85217923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca74f6c8d54f2b2ffdc053b95a19222af9bcdfea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\recuperar-senha.tpl',
      1 => 1592071257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eec4b1692f946_85217923 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <span>Recuperar Senha</span>
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
                    <h2>Recuperar Senha</h2>
                    <form method="POST">
                        <div class="group-input">
                            <label for="cli_email">Email *</label>
                            <input type="email" name="cli_email" id="cli_email" placeholder="Digite seu e-mail..." required>
                        </div>
                        <button type="submit" class="site-btn login-btn">Recuperar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End --><?php }
}
