<?php
/* Smarty version 3.1.36, created on 2020-06-10 22:40:48
  from 'C:\xampp\htdocs\jvhookah\adm\view\adm_produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ee18ba09d48c6_17218937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a005064c977d8a7978c86cccbe9a656a1f2fa1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\adm\\view\\adm_produtos.tpl',
      1 => 1591839647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee18ba09d48c6_17218937 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="col-12">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUTOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><span style="line-height: 38px;"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 Ref: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</span><?php if ($_smarty_tpl->tpl_vars['P']->value['pro_estoque'] == 0) {?><span class="bg-danger text-white p-2 d-inline-block text-uppercase ml-4"> Sem estoque</span><?php }?><span class="float-right"><button class="btn btn-danger" data-toggle="modal" data-target="#removerProduto<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
"><i class="fas fa-trash"></i></button></span></h6>
            </div>
            <!-- Modal Remover e Editar Produtos-->
            <div class="modal fade bd-example-modal-xl" id="removerProduto<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
" tabindex="-1" role="dialog" aria-labelledby="ExcluirModal" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-danger" id="ExcluirModal">Excluir Produto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-2">
                                    <img class="img img-fluid" style="width: 15rem;" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                                </div>
                                <div class="col">
                                    <p class="font-weight-bold text-primary"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</p>
                                    <p class="text-danger">Você deseja excluir esse produto?</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
                        <img class="img img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_gg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                    </div>
                    <div class="col">
                        <p class="card-text text-info font-weight-bold">Descrição</p>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</p>
                        <p class="card-text text-info font-weight-bold">Características</p>
                        <p class="card-text"><span>Largura: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_largura'];?>
 cm</span> <span class="ml-3">Altura: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_altura'];?>
 cm</span> <span class="ml-3">Comprimento: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_comprimento'];?>
 cm</span> <span class="ml-3">Peso: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_peso'];?>
 kg</span><span class="ml-3">Modelo: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_modelo'];?>
</span>                            <span class="ml-3">Tamanho: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_tamanho'];?>
</span> <span class="ml-3">Cor: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cor'];?>
</span> <span class="ml-3">Quantidade em estoque: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];?>
</span></p>
                        <p class="card-text text-info font-weight-bold">Marca e Fabricante</p>
                        <p class="card-text"><span>Categoria: <?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</span> <span class="ml-3">Sub Categoria: <?php echo $_smarty_tpl->tpl_vars['P']->value['sub_nome'];?>
</span> <span class="ml-3">Fabricante: <?php echo $_smarty_tpl->tpl_vars['P']->value['fab_nome'];?>
</span> <span class="ml-3">Quantidade em estoque <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];?>
</span></p>
                        <p class="card-text"><span>Valor: R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</span></p>
                    </div>
                    <div class="col-12 text-right">
                        <p><a type="button" href="#" class="btn btn-primary">Detalhes</a></p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-muted">Adicionado em <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_data_cad'];?>
</p>
            </div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
