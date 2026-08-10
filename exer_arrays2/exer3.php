<?php
// FAÇA UMA TABELA EM HTML USANDO 4 ARRAYS;
$flores = array("Orquídea", "Margarida", "Petúnia");
$frutas = array("Laranja", "Maça", "Limão");
$cidades = array("Foz do Iguaçu", "Cascavel", "Toledo");
$locais = array("Itaipu", "Cataratas", "Parque das Aves");

$informacoes = array($flores, $frutas, $cidades, $locais);


echo "<table border='1' style='border-collapse: collapse; text-align: center; width: 100%;'>";
echo "<tr>
    
    <th>Flores</th>
    <th>Frutas</th>
    <th>Cidades</th>
    <th>Locais</th>
    </tr>";

// IA
foreach ($informacoes[0] as $i => $valor) {
    echo "<tr>";
    foreach ($informacoes as $array) {
        echo "<td>" . $array[$i] . "</td>";
    }
    echo "</tr>";
}



echo "</table>";
