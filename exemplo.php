<?php

// Funções
function soma(int $n1, int $n2 = 0): int {
    $soma = $n1 + $n2;
    return $soma;
}

// MAIN
$s = soma(1, 2); 
echo "Soma = " . $s . "<br>";

$s2 = soma("ADSKOASDO");
echo "Soma 2 = " . $s2;
