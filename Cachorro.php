<?php

class Cachorro
{
    public string $nome;
    public string $cor;
    public string $raca;
    
    function __construct(string $nome, string $cor)
    {
        $this->nome = $nome;
        $this->cor = $cor;
    }
}

?>