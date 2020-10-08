// Checkout Transparente PagSeguro
$('#pagamento').on('click', function() {


});

let endereco = $('.link').attr('data-link');

function iniciaSessao() {
    console.log(endereco)
    $.ajax({
        url: endereco,
        type: "POST",
        dataType: "json",
        success: function(retorno) {
            console.log(retorno);
        },
        error: function(retorno) {
            console.log("erro");
        },
    });
}
iniciaSessao();