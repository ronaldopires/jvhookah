<?php
/* Smarty version 3.1.36, created on 2020-05-27 00:07:47
  from 'C:\xampp\htdocs\jvhookah\view\produtos_favoritos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ecdd983633655_11077391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd147cd5ff16132ec70da6c38f359ee11b472843d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\produtos_favoritos.tpl',
      1 => 1590548866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecdd983633655_11077391 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <span>Favoritos</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<div class="row no-gutters justify-content-center mt-4 my-4">
    <div class="col-lg-8 col-md-6 col-sm-auto">
        <h4 class="text-center">MEUS FAVORITOS</h4>
        <hr>
        <div class="col">
            <div class="card-group">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FAVORITOS']->value, 'F');
$_smarty_tpl->tpl_vars['F']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['F']->value) {
$_smarty_tpl->tpl_vars['F']->do_else = false;
?>
                <div class="card">
                    <form action="" method="POST">
                        <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['F']->value['ID'];?>
">
                        <h4 class="card-header text-right"><button class="btn btn-default" name="removerFavorito" title="Remover Favorito"><i class="ti-close"></i></button></h4>
                    </form>
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-3 mr-3">
                                <img class="card-img" src="<?php echo $_smarty_tpl->tpl_vars['F']->value['IMG'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['F']->value['IMG'];?>
">
                            </div>
                            <div class="col">
                                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['F']->value['NOME'];?>
</h5>
                                <h5 class="card-text"><?php echo $_smarty_tpl->tpl_vars['F']->value['CATE_NOME'];?>
</h5>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['F']->value['DESC'];?>
</p>
                                <p class="card-text ">Valor <span style="color: #e7ab3c;">R$ <?php echo $_smarty_tpl->tpl_vars['F']->value['VALOR'];?>
</span> <span class="ml-5">R$ <?php echo $_smarty_tpl->tpl_vars['F']->value['DESCONTO'];?>
</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Adicionado em <?php echo $_smarty_tpl->tpl_vars['F']->value['DATA_FAVORITO'];?>
</small>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</div><?php }
}
