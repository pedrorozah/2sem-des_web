function validar (){
    let titulo = document.getElementById("titulo").value;
    let autor = document.querySelector("#autor").value;
    let genero = document.querySelector("#genero").value;
    let qtdPaginas = document.querySelector("#qtd-paginas").value;

    let divErro = document.querySelector("#divErro");


    // VALIDA CADA CAMPO DO FORM
    if (titulo.trim() == ''){
        divErro.innerHTML = "Informe o título!";
        return false;
    } 

    if (genero.trim() == '') {
        divErro.innerHTML = "Informe o gênero!";
        return false;
    }
    
    if (qtdPaginas.trim() == '') {
        divErro.innerHTML = "Informe a quantidade de páginas!";
        return false;
    }
    
    if (autor.trim() == '') {
        divErro.innerHTML = "Informe o autor!";
        return false;
    }

    

    return true;



}