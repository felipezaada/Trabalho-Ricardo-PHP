<?php

enum Tipo
{
  case Vazio;
  case Fisico;
  case Ebook;
}

enum Status
{
  case Vazio;
  case Disponivel;
  case Emprestado;
  case Reservado;
}

class Livro
{
  // propriedades
  
  public string $titulo;
  public string $autor;
  public string $editora;
  public int $anoPublicacao;
  public int $paginas;
  public string $ISBN;
  public Status $status;
  public Tipo $tipo;

  // métodos
  function get_titulo()
  {
    return $this->titulo;
  }
  function get_autor()
  {
    return $this->autor;
  }
  function get_editora()
  {
    return $this->editora;
  }
  function get_anoPublicacao()
  {
    return $this->anoPublicacao;
  }
  function get_ISBN()
  {
    return $this->ISBN;
  }
  function get_tipo(): Tipo
  {
    return $this->tipo;
  }
  function get_paginas()
  {
    return $this->paginas;
  }
  function get_status()
  {
    return $this->status;
  }

  function __toString()
  {
    return "TITULO: " . $this->get_titulo() . "<br/>" . "AUTOR: " . $this->get_autor() . "<br/>" . "EDITORA: " .
      $this->get_editora() . "<br/>" . "ANO DE PUBLICAÇÃO: " . $this->get_anoPublicacao() . "<br/>" . "ISBN: " . $this->get_ISBN()
      . "<br/>" . "TIPO: " . $this->get_tipo()->name . "<br/>" . "NÚMERO DE PAGINAS: " . $this->get_paginas() . "<br/>" . "STATUS: " . $this->get_status()->name . "";
  }

  function __construct($titulo = "Livro", $autor = "Vazio", $editora = "Vazio", $anoPublicacao = 0000, $ISBN = "Vazio", $tipo = Tipo::Vazio, $paginas = 0, $status = Status::Disponivel)
  {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->editora = $editora;
    $this->anoPublicacao = $anoPublicacao;
    $this->ISBN = $ISBN;
    $this->tipo = $tipo;
    $this->paginas = $paginas;
    $this->status = $status;
  }

}

?>