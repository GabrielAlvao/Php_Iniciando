<?php
$peso = 74;
$altura = 1.78;

$imc = $peso / ($altura ** 2);

    if ($imc >=18.5 && $imc <= 25) {
        echo $imc. PHP_EOL."Peso Ideal";
    }else if ($imc < 18.5) {
        echo $imc. PHP_EOL ."Peso Abaixo do Ideal";
    }else {
        echo $imc. PHP_EOL ."Peso Acima da Média";
    }
    // Calculando o Imc
?>