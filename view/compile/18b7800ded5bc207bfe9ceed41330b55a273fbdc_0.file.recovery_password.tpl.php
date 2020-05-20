<?php
/* Smarty version 3.1.36, created on 2020-05-19 18:53:14
  from 'C:\xampp\htdocs\jvhookah\view\recovery_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec40efa22e0f0_91196131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18b7800ded5bc207bfe9ceed41330b55a273fbdc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\recovery_password.tpl',
      1 => 1589907193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec40efa22e0f0_91196131 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <label for="username">Email *</label>
                            <input type="email" name="email" id="username" placeholder="Digite seu e-mail..." required>
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
