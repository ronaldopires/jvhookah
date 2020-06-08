$(window).on('load', function() {

    /* Variáveis */


    /* Modal confirmar Idade */
    var modalIdade = localStorage.getItem("modal");
    if (!modalIdade) {
        setTimeout(() => {
            abrirModalIdade();
        }, 3000);
    }

    function abrirModalIdade() {
        $('#modalIdade').modal('show');
        $('#maior').on('click', () => {
            modalIdade = localStorage.setItem("modal", true);
        });
        $('#menor').on('click', () => {
            alert("Nossa loja vende itens apenas para maiores de idade!");
        });
    }

    //Simular envio do formulário da página de produtos para filtrar a pesquisa
    $("#opcoes").change("click", ordenarProdutos);

    function ordenarProdutos() {
        $("#enviar").trigger("click");
    }


    /* Div cep */
    $('#btnCep').on('click', () => {
        $('#divCep').slideDown('slow');
    });
    //Desabilita o envio do formulário com o enter
    $('form#formCep').keypress(function(e) {
        if ((e.keyCode == 10) || (e.keyCode == 13)) {
            e.preventDefault();
        }
    });
    $('#btnCalcularCep').on('click', () => {
        calcFrete();
    });

    /* Calcular frete */
    function calcFrete() {
        let cep_cliente = $('#cep_cli').val();
        let peso_frete = $('#peso_frete').val();
        let altura_frete = $('#altura_frete').val();
        let largura_frete = $('#largura_frete').val();
        let comprimento_frete = $('#comprimento_frete').val();
        if ((cep_cliente.length !== 8)) {
            $('#message').html('<span class="text-danger">Tamanho inválido. Digite 8 digitos.</span>');
            $('#cep_cli').css('border-color', 'red');
        } else {
            $('#resultCep').show();
            $('#frete').addClass('col-12 p-0')
            $('#frete').html('<div class="loader d-block"></div><span>Carregando...</span>')
            $('#frete').load('controller/frete.php?cep_cliente=' + cep_cliente + '&peso_frete=' + peso_frete + '&altura_frete=' + altura_frete + '&largura_frete=' + largura_frete + '&comprimento_frete=' + comprimento_frete);
            $('#message').hide();
            $('#cep_cli').css('border-color', '#ebebeb');
        }
    }

    function abrirDivCep() {
        let cep_cliente = $('#cep_cli').val();
        if (cep_cliente.length == 8) {
            $('#divCep').slideDown('slow');
            calcFrete();
        }
    }
    // Tentar mudar o método
    if ($('#cep_cli').val() != undefined) {
        abrirDivCep();
    };

    $('#cep_cli').keyup(function() {
        let cep_cliente = $('#cep_cli').val();
        if (cep_cliente.length == 8) {
            $('#divCep').slideDown('slow');
            calcFrete();
        }
    });

    /** BUSCA CEP */
    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#endereco").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
    }

    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#endereco").val("Pesquisando...");
                $("#bairro").val("Pesquisando...");
                $("#cidade").val("Pesquisando...");
                $("#uf").val("Pesquisando...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#endereco").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });

    $('#btn-finalizar').on('click', () => {
        $('#divCep').slideDown('slow');
    });

    /* Alertas remover produtos */
    $('#alertRemoveAll').hide();

    $('#btnRemoveAll').on('click', () => {
        $('#alertRemoveAll').slideDown();
    })
    $('.closeAlert').on('click', () => {
        $('#alertRemoveAll').slideUp();
    });

    /** Salvar dados do cliente */
    let edit = true;

    $('#divBtnSave').hide();

    $('#btnEditarDadosCli, #btnCancelDadosCli').on('click', function btnReandonly(e) {
        e.preventDefault();
        $('.activeReandonly').attr('readonly', edit = !edit);
        $('#divBtnSave').slideToggle();
    });

    $('#btnCancelDadosCli').on('click', () => {
        location.reload();
    });

    //Desabilita o envio do formulário com o enter
    $('form#formNovoEndereco, #formEditarEndereco, #formEditarOutroEndereco').keypress(function(e) {
        if ((e.keyCode == 10) || (e.keyCode == 13)) {
            e.preventDefault();
        }
    });

    /* Alterar senha */
    $('#divAlterarSenha').hide();
    $('#btnAlterarSenha').on('click', () => {
        $('#divAlterarSenha').toggle('slow');
    });

    /* Voltar ao Topo */
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('a[href="#top"]').fadeIn();
        } else {
            $('a[href="#top"]').fadeOut();
        }
    });

    $('a[href="#top"]').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    /* Senha */
    let $inputSenha = $('#cli_senha');
    let $eye = $('#eye');

    $eye.mousedown(function() {
        $inputSenha.attr("type", "text");
        $eye.removeClass("fa fa-eye-slash");
        $eye.addClass("fa fa-eye");
    });

    $eye.mouseup(function() {
        $inputSenha.attr("type", "password");
        $eye.removeClass("fa fa-eye");
        $eye.addClass("fa fa-eye-slash");
    });

    $("#eye").mouseout(function() {
        $("#senha").attr("type", "password");
    });


    /* FORM REGISTER */
    let tabAtivo = 0

    showtab(tabAtivo);

    function showtab(n) {
        let x = $('.tab');

        x[n].style.display = "block";

        if (n == 0) {
            $('#anterior').hide();
        } else {
            $('#anterior').show();
        }

        if (n == (x.length - 1)) {
            $('#proximo').prop("submit");
            $('#proximo').html('Enviar');
        } else {
            $('#proximo').html('Próximo');
        }
    }
    $('#anterior').on('click', () => {
        nextPrev(-1);
    });
    $('#proximo').on('click', () => {
        nextPrev(1);
    });

    function nextPrev(n) {
        let x = $('.tab');

        if (n == 1 && !validateForm()) return false;

        x[tabAtivo].style.display = "none";
        tabAtivo = tabAtivo + n;

        if (tabAtivo == 1) {
            $('.progress-bar').css("width", "66%");
        } else if (tabAtivo == 2) {
            $('.progress-bar').css("width", "100%");
        } else {
            $('.progress-bar').css("width", "33%");
        }

        if (tabAtivo >= x.length) {
            $('#formReg').submit();
            $('#formReg').hide();
            return false;
        }
        showtab(tabAtivo);
    }

    function validateForm() {
        let x, y, i, valid = true;
        x = $('.tab');
        y = x[tabAtivo].getElementsByClassName("validator");
        for (i = 0; i < y.length; i++) {
            if (y[i].value == "") {
                y[i].className += " invalid";
                valid = false;
            } else {
                y[i].className = "form-control";
            }

        }
        return valid;
    }


    /* Validar senha */

    $('#con_senha').on('blur', () => {
        verificaSenhas();
    });

    function verificaSenhas() {
        let senha = $('#senha').val();
        let con_senha = $('#con_senha').val();
        if (senha !== con_senha) {
            $('#senha').css("border-color", "red");
            $('#con_senha').css("border-color", "red");
            $('.erro_senha').html("As senhas não confere.");
        } else {
            $('#senha').css("border-color", "#ced4da");
            $('#con_senha').css("border-color", "#ced4da");
            $('.erro_senha').html("");
        }
    }

    $('#nascimento').datepicker({
        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']
    });


















});