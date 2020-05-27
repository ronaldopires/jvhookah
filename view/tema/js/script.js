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
        if ((cep_cliente.length !== 8)) {
            $('#message').html('<span class="text-danger">Tamanho inválido. Digite 8 digitos.</span>');
            $('#cep_cli').css('border-color', 'red');
        } else {
            $('#resultCep').show();
            $('#frete').addClass('py-3')
            $('#frete').html('<div class="loader d-block"></div><span>Carregando...</span>')
            $('#frete').load('controller/frete.php?cepcliente=' + cep_cliente + '&pesofrete=' + peso_frete);
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
        $("#rua").val("");
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
                $("#rua").val("Pesquisando...");
                $("#bairro").val("Pesquisando...");
                $("#cidade").val("Pesquisando...");
                $("#uf").val("Pesquisando...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
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
    $('#alertRemoveItem').hide();

    $('#btnRemoveAll').on('click', () => {
        $('#alertRemoveAll').slideDown();
    })
    $('.btnRemoveItem').on('click', () => {
        $('#alertRemoveItem').slideDown();
    })
    $('.closeAlert').on('click', () => {
        $('#alertRemoveAll').slideUp();
        $('#alertRemoveItem').slideUp();
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




























});