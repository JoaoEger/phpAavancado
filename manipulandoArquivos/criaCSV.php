<?php

$dados = [
    ["nome","idade","cidade"],
    ["Diego","38","Blumenau"],
    ["Daniel Cerveja", 37, "Matupá"],
    ["Claudio", 54, "Blumenau"],
    ["João", 16, "Otaclio Costa"],
    ["Guilherme", 34, "Biguaçu"],
    ["Pedro", 18, "São Paulo"],
    ["Maria", 25, "Rio de Janeiro"],
    ["João", 30, "Belo Horizonte"],
    ["Ana", 22, "Salvador"],
    ["Lucas", 28, "Fortaleza"],
    ["Mariana", 35, "Recife"],
    ["Carlos", 19, "Brasília"],
    ["Julia", 27, "Curitiba"],
    ["Rafael", 23, "Manaus"],
    ["Gabriela", 31, "Porto Alegre"],
    ["Fernando", 26, "Belém"],
    ["Isabela", 29, "Natal"],
    ["Gustavo", 33, "Vitória"]
];

/* $handle = fopen("pessoas.csv", "w");

if($handle){
    foreach($dados as $ln){
        //funcao add automaticamente as virgulas e as vezes aspas quando precisar
        fputcsv($handle, $ln, ";");
    }
    fclose($handle);
} */

// LER ARQUIVO CSV

$dadosLidos = [];

if( ($handle = fopen("pessoas.csv", "r")) !== false ){
    
    while(($linha = fgetcsv($handle)) !== false){
        $dadosLidos[] = explode(';', $linha[0]);
    }
    fclose($handle);
}

//exibiçao dos dados
echo "<pre>";
print_r($dadosLidos);
echo "</pre>";