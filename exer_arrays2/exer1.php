<?php
$numeros = array(3, 2, 3, 4, 11, 4, 7, 8, 9, 10);
$soma = 0;
$media = 0;

echo "<h1>Lista de números:</h1><br>";
for ($i = 0; $i < count($numeros); $i++) {
    echo "<span>Número: {$numeros[$i]}</span><br>";
    $soma += $numeros[$i];
}

$media = $soma / count($numeros);
echo "<br>Média dos números: {$media}";
