<!-- Crie uma página com um formulário onde o usuário seleciona uma
cor em um select. Após submeter a escolha, altere a cor de fundo da
página que será exibida. Disponibilize as seguintes cores para serem
selecionadas: http://www.w3schools.com/html/html_colors.asp -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor Form</title>
</head>
<body>
    <h3>Formulário da COR</h3>
    <form action="cor_formexec.php" method="post">
        <span>SELECIONE A COR</span>
        <br>
        <select name="cor">
            <option value=""></option>
            <option value="tomato">Tomato</option>
            <option value="orange">Orange</option>
            <option value="dodgerblue">DodgerBlue</option>
            <option value="mediumseagreen">MediumSeaGreen</option>
            <option value="gray">Gray</option>
            <option value="slateblue">SlateBlue</option>
            <option value="violte">Violet</option>
            <option value="lightgray">LightGray</option>
        </select>
        <button>Enviar</button>
    </form>
</body>
</html>