<?php

class Usuario{
    private string $id;
    private string $nome;
    private string $login;
    private string $senha;

    function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->saudacao();
    }

    public function getNome(){
        return $this->nome;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setNome($novo_nome){
        $this->nome = $novo_nome;
    }

    public function setLogin($novo_login){
        $this->login = $novo_login;
    }

    private function saudacao(){
        echo '<br> Bem Vindo '.$this->nome;
    }
}

?>