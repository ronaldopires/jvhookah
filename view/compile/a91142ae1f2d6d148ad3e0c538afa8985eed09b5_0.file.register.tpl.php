<?php
/* Smarty version 3.1.36, created on 2020-05-26 14:12:39
  from 'C:\xampp\htdocs\jvhookah\view\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ecd4e07bc1bd3_95393093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a91142ae1f2d6d148ad3e0c538afa8985eed09b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\register.tpl',
      1 => 1590512000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecd4e07bc1bd3_95393093 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-lg-10 col-md-8 col-sm-auto">

                <h2 style="text-align: center;">Cadastro</h2>
                <hr>
                <div class="register-form">
                    <form action="" method="POST">
                        <div id="svg_wrap"></div>

                        <section class="block">
                            <p class="paragraph">Dados Pessoais</p>
                            <input class="input-register requerido" name="cli_nome" type="text" placeholder="Nome" required />
                            <span class="mensagem"></span>
                            <input class="input-register requerido" name="cli_sobrenome" type="text" placeholder="Sobrenome" required />
                            <span class="mensagem"></span>
                            <input class="input-register requerido" name="cli_cpf" type="text" maxlength="11" placeholder="CPF" required />
                            <span class="mensagem"></span>
                            <span id="erro_mostrar"></span>
                            <input class="input-register requerido" name="cli_data_nasc" type="date" required />
                            <span class="mensagem"></span>
                            <select class="input-register requerido" name="cli_sexo" id="sexo" required>
                                <option value="" disabled selected>Sexo</option>
                                <option value="f">Feminino</option>
                                <option value="m">Masculino</option>
                            </select>
                            <span class="mensagem"></span>
                            <input class="input-register" name="cli_telefone" type="number" placeholder="Telefone" />
                            <input class="input-register" name="cli_celular" type="number" placeholder="Celular" />
                        </section>

                        <section class="block">
                            <p class="paragraph">Endereço</p>
                            <input class="input-register" name="cli_cep" type="text" id="cep" maxlength="9" placeholder="CEP" required/>
                            <input class="input-register" name="cli_endereco" type="text" maxlength="150" id="rua" placeholder="Rua" required />
                            <input class="input-register" name="cli_bairro" type="text" id="bairro" maxlength="100" placeholder="Bairro" required />
                            <input class="input-register" name="cli_cidade" type="text" id="cidade" maxlength="50" placeholder="Cidade" required />
                            <input class="input-register" name="cli_uf" type="text" id="uf" maxlength="2" placeholder="UF" required />
                            <input class="input-register" name="cli_numero" type="text" placeholder="Número" required />
                            <input class="input-register" name="cli_complemento" type="text" placeholder="Complemento" />
                        </section>

                        <section class="block">
                            <p class="paragraph">Dados do Login</p>
                            <input class="input-register" name="cli_email" type="email" id="cli_email" placeholder="E-mail" required />
                            <span id="erro_mostrar"></span>

                            <input class="input-register" name="cli_senha" type="password" id="cli_senha" placeholder="Senha">
                            <input class="input-register" name="cli_con_senha" type="password" id="cli_con_senha-pass" placeholder="Confirme a Senha">
                            <button type="submit" class="site-btn register-btn">Criar Conta</button>
                        </section>
                    </form>
                    <!-- <div class="switch-login">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
" class="or-login">Faça Login</a>
                        </div> -->
                </div>
                </section>
            </div>
            <div class="col-lg-10 col-md-8 col-sm-auto">
                <div class="button btnFormCad" id="prev">&larr; Anterior</div>
                <div class="button btnFormCad" id="next">Próxima &rarr;</div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End --><?php }
}
