<?php

$p1 = array("nome" => "Manuel de Medeiros", 
"end" => "Rua das Acácias",
"cidade" => "Foz do Iguaçu",
"UF" => "PR");

$p2 = array("nome" => "Juliana de Amaral", 
"end" => "Rua dos Pinheiros",
"cidade" => "Florianópolis",
"UF" => "SC");

$p3 = array("nome" => "Rodrigo Baidek", 
"end" => "Rua Dom Pedro I",
"cidade" => "Petrópolis",
"UF" => "RJ");

$p4 = array("nome" => "Fabíola da Silva", 
"end" => "Rua Chile",
"cidade" => "Guarulhos",
"UF" => "SP");

$pessoas =  array($p1, $p2, $p3, $p4);

echo "<table border=1>";

echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Endereço</th>";
    echo "<th>Cidade</th>";
    echo "<th>UF</th>";
echo "</tr>";

foreach($pessoas as $pessoa){
    echo "<tr>";
    foreach($pessoa as $valor){
        echo "<td>{$valor}</td>";
    }
    echo "</tr>";
}

echo "</table>";


