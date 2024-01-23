<?php
/**
 * mas pq manipular arquivos php
 * a principio voce pode usar a manipulaçao de arquivos para varias coisas tais como:
 * 
 * fazer um gerenciador de arquivos remoto
 * editar um arquivo .css remotamente em um sitema gerenciador de conteudo qualquer
 * salvar informaçoes de acesso em um arquivo de log
 * criar um contador para seu site
 * sintaxe: fopen(nomeArquivo, modo)
 * 
 */

/* $arquivo = 'hello.txt';
//abrir ou criar arquivo
$handle = fopen($arquivo, 'a'); */

/* if($handle){
    //escrever algo no arquivo
    fwrite($handle, "Ola mundo 3".PHP_EOL);//pula linha no arquivo

    //fechar arquivo
    fclose($handle);

} */
//ler o arquivo
// $conteudo = file_get_contents($arquivo);
// echo $conteudo;

//gerar um arquivo com lista de pessoas
$dados = [
    "Maria",
    "João",
    "José",
    "Jonas"
];

$arquivo = 'pessoas.txt';
$path = __DIR__.'/../arquivos/';

$handle = fopen($path.$arquivo, 'w');

if($handle){
    foreach($dados as $ln){
        fwrite($handle, $ln.PHP_EOL);
    }

    fclose($handle);
}

//ler os dados
$handle = fopen($path.$arquivo, 'r');
while(!feof($handle)){
    echo fgets($handle)."<br>";
}