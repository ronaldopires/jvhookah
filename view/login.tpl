<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <span>Login</span>
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
                    <h2>Login</h2>
                    <form method="POST">
                        <div class="group-input">
                            <label for="cli_email">Email *</label>
                            <input type="email" name="cli_email" id="cli_email" required>
                        </div>
                        <div class="group-input">
                            <label for="cli_senha">Senha *</label>
                            <input type="password" name="cli_senha" id="cli_senha" required><i id="eye" class="fa fa-eye-slash"></i>
                        </div>
                        <div class="group-input gi-check">
                            <div class="gi-more">
                                <label for="save-pass">
                                    Lembrar senha
                                    <input type="checkbox" id="save-pass">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="{$PASS_RESET}" class="forget-pass">Esqueci minha senha</a>
                            </div>
                        </div>
                        <button type="submit" class="site-btn login-btn">Entrar</button>
                    </form>
                    <div class="switch-login">
                        <a href="{$PAG_CADASTRO}" class="or-login">Cadastre-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->