<!-- Register Section Begin -->
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
                            <a href="{$PAG_LOGIN}" class="or-login">Faça Login</a>
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
<!-- Register Form Section End -->