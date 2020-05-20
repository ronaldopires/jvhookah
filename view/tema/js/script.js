$(window).ready(function() {

    let botao;
    var lsModal = localStorage.getItem("modal");
    if (!lsModal) {
        setTimeout(() => {
            abrirModal();
        }, 3000);
    }

    function abrirModal() {
        let botao;
        $('#exampleModal').modal('show');
        //caso seja maior
        $('#yes').click(function() {
            //
        });
        //Caso seja menor
        $('#no').click(function() {
            acessoNegado();
        });

        var lsModal = localStorage.setItem("modal", false);
    }

    function acessoNegado() {
        window.location.href = "https://www.youtube.com/";
    }



    //Calcular frete
    /* 
        $('#cepform').on('submit', function(e) {
            e.preventDefault();
            var dados = $(this).serialize();
            var $cep_origem = 08040740;
            var peso = 1;
            var $comprimento = 1
            var $cep_destino = $('#cep').val();
            var cod_servico =+ 'SEDEX10' cod_servico = 40215; 
            var cod_servico =+ 'SEDEXACOBRAR' cod_servico = 40045; 
            var cod_servico =+ 'SEDEX' cod_servico = 40010; 
            var cod_servico =+ 'PAC' cod_servico = 41106;
            $.ajax({
                url: "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&sCepOrigem="+cep_origem+"&sCepDestino="+cep_destino+"&nVlPeso="+peso+"&nCdFormato=1&nVlComprimento="+comprimento+"&nVlAltura="+altura+"&nVlLargura="+largura+"&sCdMaoPropria=n&nVlValorDeclarado="+valor_declarado+"&sCdAvisoRecebimento=n&nCdServico="+cod_servico+"&nVlDiametro=0&StrRetorno=xml",
                method: 'get',
                dataType: 'json',
                data: dados,
                success: function(dados) {
                    console.log(dados);
                    $('#frete').append('<h4>' + dados.logradouro + '</h4>');
                    //$('#frete').append('<div class="form-check"><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="opcao1" checked><label class="form-check-label" for="exampleRadios1">Radio padrão</label></div>')
                }
            })
     */

});


//Simular envio do formulário da página de produtos para filtrar a pesquisa
function clickOrder() {
    $("#enviar").trigger("click");
}
//
$("#opcoes").change("click", clickOrder);

/**
 * Div cep
 */
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
    let cep_cli = $('#cep_cli').val();
    let peso_frete = $('#peso_frete').val();
    if ((cep_cli.length !== 8)) {
        $('#message').html('<span class="text-danger">Tamanho inválido. Digite 8 digitos.</span>');
        $('#cep_cli').css('border-color', 'red');
    } else {
        $('#resultCep').show();
        $('#frete').addClass('py-3')
        $('#frete').html('<div class="loader d-block"></div><span>Carregando...</span>')
        $('#frete').load('controller/frete.php?cepcliente=' + cep_cli + '&pesofrete=' + peso_frete);
        $('#message').hide();
        $('#cep_cli').css('border-color', '#ebebeb');
        /* $('input:radio[name=frete_radio]').each(function() {
            if ($(this).is(':checked'))
                console.log($(this).val());
        }); */
    }

})

$('#btn-finalizar').on('click', () => {
    $('#divCep').slideDown('slow');
})