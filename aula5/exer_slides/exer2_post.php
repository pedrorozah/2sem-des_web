<?php

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];
$mediaAritmetica = ($num1 + $num2 + $num3) / 3;

echo "Média aritmética de {$num1}, {$num2}, {$num3}: " . $mediaAritmetica;
