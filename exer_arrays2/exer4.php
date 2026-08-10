<?php
$array_carros = array(
    ["modelo" => "Polo", "marca" => "Volkswagen", "src" => "https://images.unsplash.com/photo-1671917501165-c99426010640?q=80&w=1173&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],
    ["modelo" => "Onix", "marca" => "Chevrolet", "src" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrxvAPhMEUx1INgJ37Bdi2UGTN9RyhHXa4H6fntWYhbl9oZ1B3oFl73PraUCgqrtgwdxUJWU-Ed4_RhK6qCH7RrPRilgtxjn1-AfkUAlaKVA&s=10"],
    ["modelo" => "Celta", "marca" => "Chevrolet", "src" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTedyEFLpI7pDT7lYXtBm4L6n2uUj1KZamJaNKBljlCHw&s=10"],
    ["modelo" => "Civic", "marca" => "Honda", "src" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIvQ4ZHcvDZ0AowClkYtEqPV9IpMjZ_6zuw4gkUqIeb1AIA4OKNBwGWXLY&s=10"],
    ["modelo" => "BMW 320i", "marca" => "BMW", "src" => "https://cdn.motor1.com/images/mgl/2NQ2QM/s1/bmw-320i-msport-2025.webp"],
);

foreach ($array_carros as $carro) {
    echo "<div style='border: solid 1px; width:300px; margin-top: 20px;'>";
    foreach ($carro as $chave => $valor) {
        if ($chave == "src") {
            echo "<img style='width: 100%; height: auto;' src='{$valor}'/><br>";
        } else {
            echo "<span>{$valor}</span><br>";
        }
    }

    echo "</div>";
}
