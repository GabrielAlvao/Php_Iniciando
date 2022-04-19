<?php
// Feito para incluir arquivo porém se não existir apenas gera um aviso "warning" por não ser tratado como essencial
// include('funcoes_banco.php'); 
//Require o arquivo o tornando essencial, retornando um erro caso não exista
// require('funcoes_banco.php');
// _once verifica se o arquivo já foi incluido para não gerar erro caso já tenha sido incluido
require_once('funcoes_banco.php');

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

// Looping "para cada" conta
// for each percorre mostrando o indice "$key" ou como definido $cpf
// e percorre o seu valor "values" ou como definido abaixo $conta

$contasCorrentes['509.466.878-13'] = sacar($contasCorrentes['509.466.878-13'], 500);
$contasCorrentes['509.466.878-12'] = sacar($contasCorrentes['509.466.878-12'], 1700);
$contasCorrentes['509.466.878-13'] = depositar($contasCorrentes['509.466.878-13'], 10000);
// titular_com_letras_maiusculas($contasCorrentes['509.466.878-13']);
// unset retira o item da lista
unset($contasCorrentes['509.466.878-12']);
foreach ($contasCorrentes as $cpf => $conta) {
    // list('titular'=>$titular, 'saldo'=> $saldo) = $conta;
    // abaixo encurtando o list
    ['nome' => $nome, 'saldo' => $saldo] = $conta;
    // exibeMensagem("CPF = " . $cpf . ", Nome = " . $conta['nome'] . ", Saldo = ". $conta['saldo']); 
    exibeMensagem("CPF = " . $cpf . ", Nome = " . $nome . ", Saldo = ". $saldo); 
}

// Php só trabalha com chaves inteiras ou string, qualquer tipo diferente é convertido pelo php
?>