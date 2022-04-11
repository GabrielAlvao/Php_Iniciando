<?php
// array associativos são arryas de arrays no qual nomeamos os indices
$conta1 = [
    'nome' => 'Gabriel',
     'saldo' => 1300
    ];
    // echo $conta1['nome'];
$conta2 = [
    'nome' => 'Gustavo',
     'saldo' => 1500
    ];
$conta3 = [
    'nome' => 'Maísa',
     'saldo' => 3000
    ];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['nome'] . PHP_EOL;
}