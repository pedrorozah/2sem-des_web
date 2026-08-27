<!-- 1. Escreva um programa que simule o funcionamento de uma calculadora. A interface de possuir o
três campos, sendo:
Valor 1: deve ser informado um número
Valor 2: deve ser informado outro número
Operação: deve possibilitar ao usuário selecionar o as quatro operações: Soma, Subtração,
Multiplicação e Divisão.
Ao submeter o formulário, o programa deve mostrar o resultado da operação escolhida na mesma
interface onde foram informados os campos.
Também é necessário validar os campos (no backend), exibindo uma mensagem de erro caso algum
deles não tenha sido preenchido. -->

<?php

$p = '';

if (isset($_POST['num1'], $_POST['num2'], $_POST['op'])) {
    $resultado = 0;
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];


    if ($num1 !== '' && $num2 !== '' && $op !== '') {
        if ($op == "soma") {
            $resultado = $num1 + $num2;
        } else if ($op == "multi") {
            $resultado = $num1 * $num2;
        } else if ($op == "sub") {
            $resultado = $num1 - $num2;
        } else if ($op == "div") {
            if ($num2 == 0)
                $resultado = "não existe divisão por 0.";
            else
                $resultado = $num1 / $num2;
        } else
            $resultado = 0;

        $p = "Resultado: " . $resultado;
    } else {
        if ($num1 === '' && $num2 === '') {
            $p = "Preencha os dois campos!";
        } else if ($num1 === '' && $num2 !== '') {
            $p = "Preencha o primeiro campo!";
        } else if ($num1 !== '' && $num2 === '') {
            $p = "Preencha o segundo campo!";
        } else {
            $p = "Selecione uma operação!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form action="" method="post">
        <label for="num1">
            <span>Valor 1</span>
            <input type="number" name="num1">
        </label>
        <br><br>
        <label for="num2">
            <span>Valor 2</span>
            <input type="number" name="num2">
        </label>
        <br><br>
        <select name="op">
            <option value="">Selecione a operação</option>
            <option value="soma">Soma</option>
            <option value="multi">Multiplicação</option>
            <option value="sub">Subtração</option>
            <option value="div">Divisão</option>
        </select>
        <br><br>
        <button>Calcular</button>
    </form>
    <p>
        <?php
        echo $p;
        ?>
    </p>
</body>

</html>