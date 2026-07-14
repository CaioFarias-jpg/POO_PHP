<?php

class Pessoa
{
    public int $id;
    public string $nome;
    public int $idade;
    public string $CPF;
    public string $email;
    public float $salario;

    public function __construct()
    {
        $this->id = 0;
        $this->nome = "";
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $novoNome)
    {
        $this->nome = $novoNome;
    }
}

?>