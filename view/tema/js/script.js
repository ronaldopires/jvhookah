$(window).ready(function () {

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
        $('#yes').click(function () {
            //
        });
        //Caso seja menor
        $('#no').click(function () {
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
function notify() {
    $("#enviar").trigger("click");
}
//
$("#opcoes").change("click", notify);
