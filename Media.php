<?php

$notas = $argv;
$quantidadeNotas = count($notas);
$soma = 0;

for($i=1; $i < $quantidadeNotas; $i++){
    $soma += $notas[$i];
}

$media = $soma/($quantidadeNotas-1);  // descontando o nome do arquivo (primeiro argumento)
print("Média -> $media\n");
