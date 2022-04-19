<?php
function sacar(array $conta,float $valor_a_sacar): array
{
    if ($valor_a_sacar > $conta['saldo']) {
        exibeMensagem( "Saldo insuficiente");
    }else{
        $conta['saldo'] -= $valor_a_sacar;
    }
    return $conta;
}

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . PHP_EOL;
}
function depositar (array $conta,float $valor_a_depositar): array
{
    if ($valor_a_depositar > 0) {
        $conta['saldo'] += $valor_a_depositar;
    }else {
        exibeMensagem("Valor precisa ser positivo");
    }
     return $conta;
}
function titular_com_letras_maiusculas(array $conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}
?>