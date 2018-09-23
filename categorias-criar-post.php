<?php
    // chamando a Classe
    require_once 'global.php';
try {
    // Criando objeto
    $categoria = new Categoria();
            //aqui vai o campo que queremos pegar do formulario, pegamos o NAME do FORMULARIO
    $nome = $_POST['nome'];  // Pegando o NAME do FORMULARIO
    $categoria->nome = $nome;//Pegou o VALUE do INPUT do FORM e estamos GUARDANDO no ATRIBUTO DA CLASS
    $categoria->inserir();

    // redireciona para esta pagina
    header('Location: categorias.php');
} catch (Exception $e){
    Erro::trataErro($e);
}