<?php

class Biblioteca
{
    public $acervo = []; // cria o array acervo, que armazena os livros

    function adicionarLivro(Livro $livro)
    {
        $this->acervo[] = $livro; // adiciona os livros, recebe a variável do tipo LIVRO
    }

    public function listarDisponiveis()
    {
        $disponiveis = [];
        foreach ($this->acervo as $livro) {
            if ($livro->status === Status::Disponivel) {
                $disponiveis[] = $livro; 
            }
        }

        echo "Livros disponíveis: " . "</br>" . "</br>";

        foreach ($disponiveis as $livro) {
            echo $livro . "</br>" . "</br>"; // fiz dessa forma pra manter a formatação do __toString
        }
    }

    public function listarEmprestados()
    {
        $emprestados = [];
        foreach ($this->acervo as $livro) { // percorre o array acervo com o foreach
            if ($livro->status === Status::Emprestado) {
                $emprestados[] = $livro;
            }
        }

        echo "Livros emprestados: " . "</br>" . "</br>";

        foreach ($emprestados as $livro) {
            echo $livro . "</br>" . "</br>"; // fiz dessa forma pra manter a formatação do __toString
        }
    }

    public function buscarLivroPorISBN($isbn)
    {

        echo "Livro encontrado: " . "</br>" . "</br>"; 

        foreach ($this->acervo as $livro) {
            if ($livro->ISBN === $isbn) {
                echo $livro; // mantém a formatação
            }
        }
    }

}

?>