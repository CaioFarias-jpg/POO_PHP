<?php

class Produto
{
    public int $id;
    public string $nome;
    public int $qtd_estoque;
    public string $tipo;
    public float $preco;

    public function __construct()
    {
        $this->id = 1;
        $this->nome = "";
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $novoProd){
        $this->nome = $novoProd;
    }
}

?>