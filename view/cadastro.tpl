<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-lg-10 col-md-10 col-sm-auto">

                <h2 style="text-align: center;">Cadastro</h2>
                <hr>
                <div class="register-form">
                    <div class="progress my-4" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <form id="formReg" method="POST" action="{$PAG_CADASTRO}">
                        <div class="tab">
                            <div class="row no-gutters">
                                <div class="col">
                                    <p>Dados Pessoais</p>
                                </div>
                                <div class="col text-right"><span><b>Campo obrigatório</b> <span class="text-danger h4" style="vertical-align: middle;">*</span></span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group group-input col-md-6">
                                    <label for="nome">Nome <span class="text-danger">*</span></label>
                                    <input type="text" name="cli_nome" class="form-control validator" id="nome" placeholder="Nome" required oninput="this.className = 'form-control'">
                                </div>
                                <div class="form-group group-input col-md-6">
                                    <label for="sobrenome">Sobrenome <span class="text-danger">*</span></label>
                                    <input type="text" name="cli_sobrenome" class="form-control validator" id="sobrenome" placeholder="Sobrenome" required oninput="this.className = 'form-control'">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group group-input col-md-6">
                                    <label for="cpf">CPF <span class="text-danger">*</span></label>
                                    <input type="number" name="cli_cpf" min="1" maxlength="11" class="form-control validator" id="cpf" placeholder="CPF" required oninput="this.className = 'form-control'">
                                </div>
                                <div class="form-group group-input col-md-6">
                                    <label for="nascimento">Nascimento <span class="text-danger">*</span></label>
                                    <input type="date" name="cli_data_nasc" class="form-control validator" maxlength="8" id="nascimento" placeholder="dd/mm/aaaa" required oninput="this.className = 'form-control'">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group group-input col-md-4">
                                    <label for="sexo">Sexo <span class="text-danger">*</span></label>
                                    <select id="sexo" name="cli_sexo" class="form-control validator" required oninput="this.className = 'form-control'">
                                        <option value="" disabled selected>Sexo</option>
                                        <option value="f">Feminino</option>
                                        <option value="m">Masculino</option>
                                      </select>
                                </div>
                                <div class="form-group group-input col-md-4">
                                    <label for="telefone">Telefone</label>
                                    <input type="tel" name="cli_telefone" class="form-control" id="telefone" placeholder="Telefone">
                                </div>
                                <div class="form-group group-input col-md-4">
                                    <label for="celular">Celular <span class="text-danger">*</span></label>
                                    <input type="tel" name="cli_celular" class="form-control validator" id="celular" placeholder="Celular" required oninput="this.className = 'form-control'">
                                </div>
                            </div>
                        </div>

                        <div class="tab">
                            <div class="row no-gutters">
                                <div class="col">
                                    <p>Endereço</p>
                                </div>
                                <div class="col text-right"><span><b>Campo obrigatório</b> <span class="text-danger h4" style="vertical-align: middle;">*</span></span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group group-input col-md-4">
                                    <label for="cep">CEP <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control validator" min="1" name="cli_cep" id="cep" placeholder="CEP" autocomplete="off" required oninput="this.className = 'form-control'">
                                </div>
                                <div class="form-group group-input col-md-8">
                                    <label for="endereco">Endereço <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control validator" name="cli_endereco" id="endereco" placeholder="Endereço" required oninput="this.className = 'form-control'">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group group-input col-md-6">
                                    <label for="complemento">Complemento</label>
                                    <input type="text" class="form-control" name="cli_complemento" id="complemento" placeholder="Complemento">
                                </div>
                                <div class="form-group group-input col-md-2">
                                    <label for="numero">Número <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control validator" name="cli_numero" id="numero" placeholder="Número" required oninput="this.className = 'form-control'">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group group-input col-md-4">
                                    <label for="bairro">Bairro <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control validator" name="cli_bairro" id="bairro" placeholder="Bairro" required oninput="this.className = 'form-control'">
                                </div>
                                <div class="form-group group-input col-md-4">
                                    <label for="cidade">Cidade <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control validator" name="cli_cidade" id="cidade" placeholder="Cidade" required oninput="this.className = 'form-control'">
                                </div>
                                <div class="form-group group-input col-md-4">
                                    <label for="uf">UF <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control validator" name="cli_uf" id="uf" placeholder="UF" required oninput="this.className = 'form-control'">
                                </div>
                            </div>
                        </div>

                        <div class="tab">
                            <div class="row no-gutters">
                                <div class="col">
                                    <p>Login</p>
                                </div>
                                <div class="col text-right"><span><b>Campo obrigatório</b> <span class="text-danger h4" style="vertical-align: middle;">*</span></span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group group-input col-md-12">
                                    <label for="email">E-mail <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control validator" name="cli_email" id="email" placeholder="Seu e-mail" required oninput="this.className = 'form-control'">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group group-input col-md-6">
                                    <label for="senha">Senha <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control validator" name="cli_senha" id="senha" placeholder="Senha" required oninput="this.className = 'form-control'">
                                    <span class="text-danger erro_senha"></span>
                                </div>
                                <div class="form-group group-input col-md-6">
                                    <label for="con_senha">Confirme a senha <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control validator" id="con_senha" placeholder="Confirme a senha" required oninput="this.className = 'form-control'">
                                    <span class="text-danger erro_senha"></span>
                                </div>
                            </div>
                        </div>

                        <button type="button" id="anterior" class="site-btn">Anterior</button>
                        <button type="button" id="proximo" class="site-btn">Próximo</button>
                    </form>


                    <div class="switch-login my-4">
                        <a href="{$PAG_LOGIN}" class="or-login">Faça o Login</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>