<?php
$contasCorrentes = [
    '509.466.878-11' => [
        'nome' => 'Maísa',
         'saldo' => 3000
        ],
    '509.466.878-12' => [
        'nome' => 'Gustavo',
         'saldo' => 1500
        ], 
    '509.466.878-13' => [
        'nome' => 'Gabriel',
         'saldo' => 1300
        ]
];
// Adicionando uma nova conta
// array associativo com string ele preenche o próximo como um númerico
$contasCorrentes ['509.466.878-14'] =  [
        'nome' => 'Lucas',
        'saldo' => 5000
];
// Looping "para cada" conta
// for each percorre mostrando o indice "$key" ou como definido $cpf
// e percorre o seu valor "values" ou como definido abaixo $conta
foreach ($contasCorrentes as $cpf => $conta) {
    echo "CPF = " . $cpf . ", Nome = " . $conta['nome'] . ", Saldo = ". $conta['saldo'] . PHP_EOL;
}

// Php só trabalha com chaves inteiras ou string, qualquer tipo diferente é convertido pelo php
?>