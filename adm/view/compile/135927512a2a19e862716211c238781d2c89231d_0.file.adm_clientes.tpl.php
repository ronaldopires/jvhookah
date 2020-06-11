<?php
/* Smarty version 3.1.36, created on 2020-06-11 00:04:54
  from 'C:\xampp\htdocs\jvhookah\adm\view\adm_clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ee19f5631b3c5_55033217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '135927512a2a19e862716211c238781d2c89231d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\adm\\view\\adm_clientes.tpl',
      1 => 1591844691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee19f5631b3c5_55033217 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clientes Online</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_smarty_tpl->tpl_vars['ONLINE']->value;?>
</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clientes Offline</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_smarty_tpl->tpl_vars['OFFLINE']->value;?>
</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clientes Cadastrados</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_smarty_tpl->tpl_vars['CLIENTES']->value;?>
</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clientes Offline</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_smarty_tpl->tpl_vars['OFFLINE']->value;?>
</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Clientes Cadastrados em 2020</h6>
                    </div>
                    <!-- Card Body Clients -->
                    <!-- Contém a string com dados do cliente e pego via js para o gráfico-->
                    <input id="cli" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['CLIENTES_CAD']->value;?>
">

                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="clientes"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
