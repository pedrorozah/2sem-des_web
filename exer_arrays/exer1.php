<?php
$nomes = array("Pedro", "Joao", "Fulano", "Sicrano", "Betano");
$naturalidades = array("Foz do Iguaçu", "Marechal", "Curitiba", "Cascavel", "Santa Terezinha");
$times = array("Vasco da Gama", "Flamengo", "Corinthias", "Cruzeiro", "Palmeiras");
$jogos = array("Tigrinho é uma piada", "Pinball do XP", "Skyrim é muito bom", "Cyberbug 2077", "GTA 6 tá caro");
$series = array("Game of Thrones", "Black Mirror", "Rick e Morty", "Cyberpunk Edgrunners", "Dexter");

// imprime os nomes
echo "<h1>Lista de nomes:</h1>";
echo "<ol>";
foreach($nomes as $nome){
    echo "<li>{$nome}</li>";
}

echo "</ol>";

// imprime os naturalidades
echo "<h1>Lista de naturalidades:</h1>";
echo "<ol>";
foreach($naturalidades as $naturalidade){
    echo "<li>{$naturalidade}</li>";
}

echo "</ol>";

// imprime os times
echo "<h1>Lista de times:</h1>";
echo "<ol>";
foreach($times as $time){
    echo "<li>{$time}</li>";
}
echo "</ol>";

// imprime os jogos
echo "<h1>Lista de jogos:</h1>";
echo "<ol>";
foreach($jogos as $jogo){
    echo "<li>{$jogo}</li>";
}

echo "</ol>";

// imprime as series
echo "<h1>Lista de sérires:</h1>";
echo "<ol>";
foreach($series as $serie){
    echo "<li>{$serie}</li>";
}

echo "</ol>";