<?php
$numeros = array(1, 3, 4, 7, 8, 10, 2, 11, 10, 22);
$soma = 0;
$media = 0;

foreach ($numeros as $numero) {
    echo "Número: {$numero} <br>";
    $soma += $numero;
}

$media = $soma / count($numeros);
echo "<h1>Média dos números: {$media}</h1>";
