<?php
class Carro{
    
    public string $marca;
    public string $modelo;
    public string $ano;

    public function ligar(){
        echo $this->modelo."ligou";
    }
}

?>