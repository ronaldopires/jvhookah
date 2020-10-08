<?php
/* Smarty version 3.1.36, created on 2020-06-16 21:38:47
  from 'C:\xampp\htdocs\jvhookah\view\pedido-erro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ee96617912297_62330700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29a6660fe22ab7c13684c8c3a897e7862d7c8596' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\pedido-erro.tpl',
      1 => 1592352511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee96617912297_62330700 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <span>Erro no Pagamento</span>
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
                            <h4 class="card-title text-danger">Erro ao processar o pagamento do pedido</h4>
                            <hr>
                            <p class="card-text"><span><b>Código da transação: </span> </b>
                            </p>
                            <p class="card-text"><span class="mr-3"><b>Referência: </b><?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
</span></p>
                            <p class="card-text"><span class="mr-3"><b>Status do pagamento: </b></span></p>
                            <p class="card-text"><span class="mr-3"><b>Forma de pagamento: </b></span></p>
                            <p class="card-text"><span class="mr-3"><b>Valor total: </b></span>R$ </p>
                        </div>
                    </div>
                    <div class="col p-0 mt-3">
                        <p>Seu produto será entregue em...</p>
                        <p>Em até 48hs</p>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
