<?php

$palavras = array("arroz", "com", "feijão", "gosto", "muito");
$array_vazio = array();

// popula o array vazio e imprime as palavras;
foreach ($palavras as $palavra) {
    echo "<span>Palavra: {$palavra}</span><br>";
    array_push($array_vazio, $palavra);
}

// imprime todas as palavras do array_vazio separado com virgula;
echo "<p>";

foreach ($palavras as $palavra) {
    echo $palavra . ", ";
}

echo "</p>";
