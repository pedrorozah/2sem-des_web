<?php

// exemplo pra teste: http://localhost/pedro/aula5/exer_slides/exer1.php?numeroUm=2&numeroDois=3
$numUmGet = $_GET["numeroUm"];
$numDoisGet = $_GET["numeroDois"];
$soma1 = $numUmGet + $numDoisGet;

echo "Soma dois números por _GET: " . $soma1;

// exemplo 3 e 7
$numUmPost = $_POST["numeroUm"];
$numDoisPost = $_POST["numeroDois"];
$soma2 = $numUmPost + $numDoisPost;

echo "<br>Soma dois números por _POST: " . $soma2;
