<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];
$mediaAritmetica = ($num1 + $num2 + $num3) / 3;

echo "Média aritmética de {$num1}, {$num2}, {$num3}: " . $mediaAritmetica;
