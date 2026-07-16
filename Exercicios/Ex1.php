<?php

class Pessoa
{
    public $nome;
    public $idade;
    public $endereco;

    public function __construct($nome, $idade, $endereco){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco;
    }

    public function mostrarNome(){
        echo "Nome: " . $this->nome . "\n";
    }

    public function alterarIdade($novaIdade){
        $this->idade = $novaIdade;
    }

    public function imprimirEndereco(){
        echo "Endereço: " . $this->endereco . "\n";
    }
}

$pessoa1 = new Pessoa("Caio", 20, "Rua 20, 123");

$pessoa1->mostrarNome();
echo '<br>';
$pessoa1->imprimirEndereco();
echo '<br>';
$pessoa1->alterarIdade(21);
echo "Nova idade: " . $pessoa1->idade . "\n";

?>