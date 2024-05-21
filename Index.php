<?php

include 'Livro.php';
include 'Biblioteca.php';

$biblioteca = new Biblioteca();

$livro = new Livro("As Aventuras do Chico Bento", "Mauricio de Sousa", "Editora Globo", 2020, "978-85-12345-67-8", Tipo::Fisico, 120, Status::Disponivel);
$livro2 = new Livro("Chico Bento e a Roça Encantada", "Mauricio de Sousa", "Panini", 2018, "978-85-98765-43-2", Tipo::Fisico, 150, Status::Emprestado);
$livro3 = new Livro("O Tesouro do Chico Bento", "Mauricio de Sousa", "Editora Abril", 2022, "978-85-11223-45-6", Tipo::Fisico, 140, Status::Disponivel);

$biblioteca->adicionarLivro($livro);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);

$biblioteca->marcarEmprestado($livro);
$biblioteca->renovarEmprestimo($livro);

$biblioteca->marcarDevolucao($livro2);

// o html abaixo foi gerado pelo chat gpt.
?> 


<!DOCTYPE html>
<html>

<head>
    <title>Biblioteca</title>
    <style>
        body {
            background-color: #DCD0FF;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            background-color: #8a2be2;
            text-align: center;
            font-size: 1.5em; 
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>

<body>

    <h2>
        <?php
        echo ($biblioteca->listarDisponiveis());
        echo ($biblioteca->listarEmprestados());
        echo ($biblioteca->buscarLivroPorISBN("978-85-12345-67-8"));
        ?>
    </h2>

</body>

</html>