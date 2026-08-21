<?php
//veiculo_exec.php
$modelo = $_POST["modelo"];
$marca = $_POST["marca"];
$combust = $_POST["combustivel"];

if($combust == "A"){
    $combust = "Álcool";
} else if ($combust == "G"){
    $combust = "Gasolina";
} else if ($combust == "F") {
    $combust = "Flex";
} else {
    $combust = "Desconhecido";
}

echo "<h1>Dados informados para o veículo</h1>";
echo "Modelo: " . $modelo . "<br>";
echo "Marca: " . $marca . "<br>";
echo "Combustível: " . $combust . "<br>";
echo "<br><br>";
echo "<a href='veiculo_form.php'>Cadastrar outro veículo</a>";