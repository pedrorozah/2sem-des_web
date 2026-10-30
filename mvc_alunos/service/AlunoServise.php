<?php 

include_once(__DIR__ . "/../model/Aluno.php");

class AlunoServise {
    
    public function validar(Aluno $aluno) {
        $erros = array();

        if($aluno->getNome() == NULL )
            array_push($erros, "Informe o Nome!"); 
        
        if(!$aluno->getIdade())
            array_push($erros, "Informe a Idade!");

        if(!$aluno->getEstrangeiro())
            array_push($erros, "Informe se o aluno é estrangeiro!");

        if(!$aluno->getCurso()->getId())
            array_push($erros, "Informe o Curso!");
        return $erros;
    } 
}