<?php

require 'Cachorro.php';
require 'Dog.php';
require 'Pessoa.php';
require 'Produto.php';


// $objDog = new Cachorro("TOTO","CARAMELO");
// $objDog2 = new Cachorro("TOTO","PRETO");
// print_r($objDog);

// $objDog3 = new Dog();
// $objDog3->nome = "BORIS";
// $objDog3->cor = "BRANCO";
// $objDog3->raca = "BOXER";

// $objDog2->raca = "PASTOR ALEMÃO";

// echo '<br>';
// print_r($objDog2);
// print_r($objDog3);


// $objP = new Pessoa();
// $objP->id = 10;
// $objP->idade = 24;
// $objP->salario = 10000;

// print_r($objP);

// $iza = new Pessoa();
// echo'<br>';
// echo 'ID da IZA: '.$iza->id;
// echo 'Nome atual da iza: '.$iza->nome;
// echo '<br>';
// $iza->setNome(" Izadora da Silva ");
// echo $iza->getNome();

$item = new Produto();
echo '<br>';
echo 'Nome do produto: '.$item->nome;
$item->setNome("Leite");
echo $item->getNome();

?>