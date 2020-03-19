<?php
require_once '../lib/autoload.php';
//instancio a classe correios
$destino = $_GET['cepcliente'];
$peso    = $_GET['pesofrete'];

// chamando a classe Correios
$frete = new Correios($destino, $peso);

//chamo meu metodo para calcular
$calc = $frete->Calcular();

//verifica se foi calculado, se sim retorna xml , caso não, mostra erros
if (!$calc) :

  $error = $frete->error();
  echo $error[0];

else :

  foreach ($calc as $frete) :
    if ($frete['erro'] != 0) :
      echo $frete['tipo'] . ' - ';
      echo $frete['Codigo'] . ' - ';
      echo $frete['MsgErro'];
      echo '<br><b> Erro no calculo de frete </b><br>';
    else :   

      echo '<div class="form-check">';
      echo '<input class="form-check-input" type="radio" id="'.$frete['tipo'].'" name="frete_radio" value="' . str_replace(',', '.', $frete['valor']) . '" '. ($frete["tipo"] == "SEDEX" ? $cheked="checked" : "") .' required>';
      echo '<label class="form-check-label" for="'.$frete['tipo'].'">';
      echo 'R$ ' . $frete['valor'] . ' - ' . $frete['tipo'] . ' - Prazo: ' . $frete['Prazo'] . ' dia(s)';
      echo '</label>';
      echo '</div>';
    endif;

  endforeach;
endif;