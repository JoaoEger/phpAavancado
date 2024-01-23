<?php

//EXEMPLO 1
//tratam como array
function soma(...$numeros){
    $resultado = 0;
    foreach($numeros as $numero){
        $resultado += $numero;
    }
    return $resultado;
}

//usando

echo soma(10,20,30,40);

//EXEMPLO 2
//valores fixos e variaveis (arg fixo)
function exemplo2($arg1, $arg2, ...$resto){
    echo $arg1."<br>";
    echo $arg2."<br>";
    foreach($resto as $r){
        echo $r."<br>";
    }
}
//usando
exemplo2("Diego", "João", "Carne", "Cerveja", "Torresmo");

//EXEMPLO 3
//nomeando keys

function nomeados(...$params){
    foreach($params as $chave => $valor){
        echo "{$chave}: {$valor}<br>";
    }
}

//usando
nomeados(Diego:38, Maria:45, João:33);

//EXEMPLO 4 - MEDIA DE NOTAS
function calculaMedia($aluno, ...$notas){
    echo "Aluno: {$aluno} ";
    echo "Média: ".array_sum($notas) / count($notas)."<br>";
}

calculaMedia("Diego", 10, 9.5, 6);

//CRIE UMA FUNÇÃO QUE MOSTRE O MENOR E MAIOR NUMERO CONTIDO NO PARAMETRO VARIADICO

function menorMaior(...$num){
    echo "O maior numero é ".max($num). " e o menor é ".min($num);
}

menorMaior(3,5,2,8);