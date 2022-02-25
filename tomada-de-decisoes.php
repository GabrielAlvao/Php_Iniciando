<?php
$idade = 17;
$nome = 'Gabriel';
if ($idade >= 18 && $nome == 'Gabriel') {
    echo "Você tem $idade" . PHP_EOL;
    echo "Você pode entrar por ser maior de idade";
}else if($idade >=16){
    echo "para entrar precisa estar acompanhado";
}
else{
    echo "Você não pode entrar pois é menor de idade";
}

// Operador ternario
$idade = 17;
$mensagem = $idade > 18 ? "Você tem $idade, pode entrar" : "Você tem $idade, não pode entrar";
echo $mensagem;
?>