<?php

// CRIA UM ARRAY ASSOCIATIVO "chave+valor" definidos.
$pessoa = array("nome" => "Pedro", 
"idade" => 23,
"naturalidade" => "Foz do Iguaçu");

// Percorre o vetor, imprime o índice e o valor.
echo "<h1>Informações da pessoa:</h1><br>";
foreach($pessoa as $chave => $valor){
    echo "{$chave} => {$valor} <br>";
}

// imprime o array
print_r($pessoa);

$pessoa1 = array("nome" => "Joao", 
"idade" => 35,
"naturalidade" => "Foz do Iguaçu");

$pessoa2 = array("nome" => "Davi", 
"idade" => 48,
"naturalidade" => "Rio de Janeiro");

// Cria uma matriz
$matriz = array($pessoa1, $pessoa2);

echo "<br>" . $matriz[0]["naturalidade"];