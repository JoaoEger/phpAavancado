<?php
date_default_timezone_set('America/Sao_Paulo');
// echo date_default_timezone_get()."<br>";

$hoje = date('d/m/Y');
// echo $hoje;

//calculando datas
//strtorime transforma a data para timestamp
$dataAtual = date('d/m/Y');
$dataFutura = date('d/m/Y', strtotime('+ 3 hour'));//hour, day, week, year etc

//quantos dias faltam para determinada data

$dataInicial = strtotime(date('Y-m-d'));
$dataFinal = strtotime(date('2024-01-28'));
$quantosDias = ($dataFinal - $dataInicial) / (60 * 60 * 24);

// echo "Faltam {$quantosDias} dias para o aniversário do professor";

//gerador de parcelas
$parcela = date('Y-m-d');

for($parc = 1; $parc <= 36; $parc++){
    $parcela = date('Y-m-d', strtotime($parcela."+ 1 month"));
    echo "Parcela:{$parc} Vencimento:".date('d/m/Y', strtotime($parcela))."<br>";
}
