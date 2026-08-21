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

        <label for="num2">
            <span>Valor 2</span>
            <input type="number" name="num2">
        </label>

        <select name="op">
            <option value="">Selecione a operação</option>
            <option value="soma">Soma</option>
            <option value="multi">Multiplicação</option>
            <option value="sub">Subtração</option>
            <option value="div">Divisão</option>    
        </select>

        <button>Calcular</button>

        <?php
            $resultado = 0;
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            if ($_POST['op'] == "soma") {
                $resultado = $num1 + $num2;
            } else if ($_POST['op'] == "multi"){
                $resultado = $num1 * $num2;
            } else if ($_POST['op'] == "sub"){
                $resultado = $num1 - $num2;
            } else if ($_POST['op'] == "div"){
                $resultado = $num1 / $num2;
            } else
                $resultado = 0;

            echo "Resultado: {$resultado}";
        ?>
    </form>
</body>
</html>