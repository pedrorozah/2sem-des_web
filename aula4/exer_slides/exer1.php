<?php

function calcularFatorial($num)
{
    $fatorial = 1;
    for ($num; $num >= 1; $num--) {
        $fatorial = $fatorial * $num;
    }
    return $fatorial;
}

for ($i = 5; $i <= 12; $i++) {
    echo "Fatorial de {$i}: " . calcularFatorial($i) . "<br>";
}
