<?php
class Livro{
    public string $nome;
    public string $autor;
    public string $editora;
    public int $paginas;


    public function __construct($nome, $autor, $editora, $paginas){
        $this->nome = $nome;
        $this->autor = $autor;
        $this->editora = $editora;
        $this->paginas = $paginas;
    }

    public function mostraNome(){
        echo "Nome: ".$this->nome;
    }

    public function mostrarAutor(){
        echo "Autor: ".$this->autor;
    }

    public function alterarEditora($novaEditora){
        $this->editora = $novaEditora;
    }

    public function qtdePaginas(){
        echo "Quantidas de Páginas: ".$this->paginas;
    }
}

$livro = new Livro("Senhor dos Aneis","J.R.R Tolkien","Dark","300");

$livro->mostraNome();
echo '<br>';
$livro->mostrarAutor();
echo '<br>';
$livro->alterarEditora("Harper Collins");
echo "Nova editora: ". $livro->editora . "\n";
echo '<br>';
$livro->qtdePaginas()


?>