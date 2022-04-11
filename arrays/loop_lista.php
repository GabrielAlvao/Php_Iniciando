<?php
// array sequencia de informações normalmente do mesmo tipo
$idadeList = array(21,22, 25, 30);
// a partir da versão 5.4
$idadeList2 = [21, 22, 25, 30, 19];
$primeiraIdade = $idadeList2[0]; 
// Loop percorrendo os indices do array
for ($i = 0; $i < count($idadeList2); $i++ ){
    echo $idadeList2[$i] . PHP_EOL;
}
// conta o número
echo count($idadeList2);
?>