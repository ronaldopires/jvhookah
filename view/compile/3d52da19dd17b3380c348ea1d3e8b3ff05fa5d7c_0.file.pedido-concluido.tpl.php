<?php
/* Smarty version 3.1.36, created on 2020-06-16 18:49:57
  from 'C:\xampp\htdocs\jvhookah\view\pedido-concluido.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ee93e85e1d282_38546271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d52da19dd17b3380c348ea1d3e8b3ff05fa5d7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\pedido-concluido.tpl',
      1 => 1592344196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee93e85e1d282_38546271 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <!-- <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Produtos</a> -->
                    <span>Pagamento Concluído</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<div class="container my-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title text-success">Pedido realizado com sucesso</h4>
                            <hr>
                            <p class="card-text"><span><b>Código da transação: </span> <?php echo $_smarty_tpl->tpl_vars['CODIGO']->value;?>
</b>
                            </p>
                            <p class="card-text"><span class="mr-3"><b>Referência: </b></span><?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
</p>
                            <p class="card-text"><span class="mr-3"><b>Status do pagamento: </b></span><?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>
</p>
                            <p class="card-text"><span class="mr-3"><b>Forma de pagamento: </b></span><?php echo $_smarty_tpl->tpl_vars['FORMA_PAG']->value;?>
</p>
                            <p class="card-text"><span class="mr-3"><b>Valor total: </b></span>R$ <?php echo $_smarty_tpl->tpl_vars['VALOR_TOTAL']->value;?>
</p>
                        </div>
                    </div>
                    <div class="col p-0 mt-3">
                        <p>Seu produto será entregue em...</p>
                        <p>Em até 48hs</p>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
</small>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
