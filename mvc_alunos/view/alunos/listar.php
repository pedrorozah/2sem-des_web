<?php

//Testar a conexão
/*
include_once(__DIR__ . "/../../util/Connection.php");
$conn = Connection::getConnection();
print_r($conn);
*/

include_once(__DIR__ . "/../../controller/AlunoController.php");

//Carregar a lista de alunos
$alunoCont = new AlunoController();
$alunos = $alunoCont->listar();
//print_r($alunos);


//Incluir o cabeçalho da aplicação
include_once(__DIR__ . "/../include/header.php");
?>


<h3>Listagem de Alunos</h3>

<a href="inserir.php" class="btn btn-primary mb-3">Inserir</a>
<br>
<table class="table table-striped table-bordered">
    <!-- Cabeçalho -->
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Estrangeiro</th>
        <th>Curso</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <!-- Dados -->
    <?php foreach ($alunos as $a): ?>
        <tr>
            <td><?= $a->getId() ?></td>
            <td><?= $a->getNome() ?></td>
            <td><?= $a->getIdade() ?></td>
            <td><?= $a->getEstrangeiroDesc() ?></td>
            <td><?= $a->getCurso() //Executar o método toString() 
                ?></td>
            <td>
                <a onclick="return confirm('Deseja alterar esse Aluno?')" href="alterar.php?id=<?= $a->getId() ?>">
                    <img src="../../img/btn_editar.png">
                </a>
            </td>
            <td>
                <a onclick="return confirm('Deseja excluir esse Aluno?')" href="excluir.php?id=<?= $a->getId() ?>">
                    <img src="../../img/btn_excluir.png">
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
//Incluir o rodapé da aplicação
include_once(__DIR__ . "/../include/footer.php");
?>