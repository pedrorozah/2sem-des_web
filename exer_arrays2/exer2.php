<?php
$palavras = array("arroz", "batata", "ovo", "farinha", "amendoim");
$palavrasVazias = array();

foreach ($palavras as $palavra) {
    array_push($palavrasVazias, $palavra);
}

echo "<h1>Palavras: ";
foreach ($palavrasVazias as $i => $palavra) {
    if ($i === array_key_last($palavrasVazias)) {
        echo "{$palavra}. ";
    } else {
        echo "{$palavra}, ";
    }
}

echo "</h1>";
