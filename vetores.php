<?php

$vet = array(10, 20, 18, 5, 7);
echo $vet[2];

// adiciona um valor ao final do vetor
array_push($vet, 30);

// PERCORRE O VETOR
echo "<h1>Valores do vetor $vet</h1>";
// for($i = 0; $i < count($vet); $i++){
//     echo "Valor: {$vet[$i]} <br>";
// }

// MELHOR COMANDO PARA PERCORRE VETORES; (forEach);

foreach ($vet as $chave => $valor) {
    // $valor é definida para o escopo - é o valor
    // $chave é o índice;
    echo "Valor: {$valor} <br>";
}
