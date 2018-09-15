<?php
    // chamando a Classe
    require_once 'classes/Categoria.php';

    // Criando objeto
    $categoria = new Categoria();

    $nome = $_POST['nome']; 
    $categoria->inserir();

    // redireciona para esta pagina
    header('Location: categorias.php');

