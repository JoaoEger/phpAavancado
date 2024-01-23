<?php

//EXEMPLO 1
$mensagem = "Olá, ";

$funcaoAnonima = function($nome) use ($mensagem){
    echo $mensagem.$nome;
};

//usando a funçao
$funcaoAnonima("João");

/**
 * EXEMPLO 2
 */
function criarContador(){
    $contador = 0;
    //closure
    $funcaoContadora = function() use (&$contador){
        $contador++;
        echo "Contagem ".$contador."<br>";
    };
    return $funcaoContadora;
}

//usando

$contadora = criarContador();

$contadora();
$contadora();
$contadora();
$contadora();

/**
 * EXEMPLO 3
 */
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$numerosPares = array_filter($numeros, function($numero){
    return $numero % 2 == 0;
});

$numerosDobrados = array_map(function($numero){
    return $numero * 2;
}, $numerosPares);

echo "<pre>";
print_r($numerosDobrados);
echo "</pre>";

//EXEMPLO 4
$soma = function($a, $b){
    return $a + $b;
};

echo $soma(44, 55);
echo "<br>";

/* FAÇA UM ALGORITIMO PARA CALCULAR MÉDIA DE NOTAS DE ALUNOS CADASTRADOS EM UM ARRAY.
USE CLOSURE PARA CALCULAR AS MEDIAS */

$alunos = [5, 7, 9, 3];

$media = function($notas){
    return array_sum($notas) / count($notas);
};

echo $media($alunos);