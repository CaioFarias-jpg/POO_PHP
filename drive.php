<?php
require './Carro.php';

$car1 = new Carro();
$car2 = new Carro();

print_r($car1);

$car2->marca = "FIAT";
$car2->modelo = "FASTBACK";
$car2->ano = "2022";

echo '<br>';
print_r($car2);
echo '<br>';
print_r($car2);

$car1->marca = "VOLKS";
$car1->modelo = "JETTA";
$car1->ano = 2020;

echo '<br>';
print_r($car1);
echo '<br>';
print_r($car1);

echo '<br>';
$car2->ligar();
echo '<br>';
$car1->ligar();

//array de objetos

$carros = [
    $car1, $car2
];
echo '<br>';
print_r($carros);
echo '<br>';

echo $carros[1]->modelo;
?>