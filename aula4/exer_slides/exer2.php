<?php

function areaCirculo(float $raio): float
{
    return 3.14 * ($raio * $raio);
}

function calcularCircunferencia(float $raio): float
{
    return 2 * 3.14 * $raio;
}

function exibirInfo(float $raio)
{
    echo "<span>Área do círculo, raio {$raio}m: </span> " . areaCirculo($raio);
    echo "<br>";
    echo "<span>Circunferência círculo raio {$raio}m</span>: " . calcularCircunferencia($raio);
    echo "<br><br>";
}

exibirInfo(2);
exibirInfo(3);
exibirInfo(4);
