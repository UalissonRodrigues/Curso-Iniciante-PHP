<?php

// todo array começa em 0, array que tem 1 dimensão e um vetor.
$frutas = array ("Laranja","Banana","Manga");

print_r($frutas);

echo "<br>";



// Array bi dimensional, posição dentro do array.

$carros [0][0] = "GM";
$carros [0][1] = "Caravan";
$carros [0][2] = "Marajo";

$carros [1][0] = "Fiat";
$carros [1][1] = "Palio";
$carros [1][2] = "Touro";

$carros [2][0] = "Ford";
$carros [2][1] = "Fusion";
$carros [2][2] = "EcoEsport";

echo $carros [2][2];
echo "<br>";
echo end($carros[0]);


// Funçoes para tratar array.


$pessoas = Array();

array_push($pessoas,array(
 'nome' => 'Ualisson',
 'Idade' => 25
));

echo "<br>";

array_push($pessoas,array(
    'nome' => 'Higor',
    'Idade' => 23
   ));

   print_r($pessoas[0]['nome']);

?>