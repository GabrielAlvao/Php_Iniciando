<?php
// array sequencia de informações normalmente do mesmo tipo
$idadeList = array(21,22, 25, 30);
// a partir da versão 5.4
$idadeList2 = [21, 22, 25, 30];
// mostrando o valor do array pelo indice
$primeiraIdade = $idadeList2[0]; 
// echo $primeiraIdade;
// adicionando mais um indice para o array
// $idadeList2[count($idadeList2)] = 40;
// caso não informe o indice ele adiciona ao final
$idadeList2[] = 40;

foreach ($idadeList2 as $key) {
    echo $key . PHP_EOL;
}
?>