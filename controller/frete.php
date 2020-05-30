<?php
require_once '../lib/autoload.php';
//instancio a classe correios
$destino = $_GET['cep_cliente'];
$peso = $_GET['peso_frete'];
$largura = $_GET['largura_frete'];
$altura = $_GET['altura_frete'];
$comprimento = $_GET['comprimento_frete'];

// chamando a classe Correios
$frete = new Correios($destino, $peso,$largura, $altura, $comprimento);

//chamo meu metodo para calcular
$calc = $frete->Calcular();


//verifica se foi calculado, se sim retorna xml , caso não, mostra erros
if (!$calc) {
    $error = $frete->error();
} else {
  echo '<div class="card">';
  echo '<ul class="list-group list-group-flush text-center p-0">';
    foreach ($calc as $frete) {
        if ($frete['valor'] == 0 && $frete['prazo'] == 0) {
            echo '<li class="list-group-item text-danger" style="font-size:12px !important;">' . $frete['tipo'] . ' Erro ' . $frete['codigo_erro'] . '</li>';
            echo '<li class="list-group-item" style="font-size:12px !important;"><b> Erro no calculo de frete </b></li>';
            echo '<li class="list-group-item text-danger" style="font-size:12px !important;"><b>' . $frete['mensagem_erro'] . '</b></li>';
        } else {
            echo '<li class="list-group-item"><input class="form-check-input" type="radio" id="' . $frete['tipo'] . '" name="frete_radio" value="' . str_replace(',', '.', $frete['valor']) . '" required>';
            echo '<label class="form-check-label" for="' . $frete['tipo'] . '">';
            echo 'R$ ' . $frete['valor'] . ' - ' . $frete['tipo'] . ' - Prazo: ' . $frete['prazo'] . ' dia(s)';
            echo '</label>';
            echo '</li>';
            if ($frete['codigo_erro'] != 0) {
                echo '<li class="list-group-item text-danger" style="font-size:12px !important;"><b>' . $frete['mensagem_erro'] . '</b></li>';
            }
        }
    }
    echo '</ul>';
    echo '</div>';
}
