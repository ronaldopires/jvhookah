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
        window.location.href = "https://www.youtube.com";
    }


});