<?php
// Comando de decisões IF e ELSE
$qualSuaIdade = 65;
$idadeMenor = 12;
$idadeMaior = 18;
$idadeMelhor =63;

if( $qualSuaIdade < $idadeMenor){   
 echo "Criança";
} else if($qualSuaIdade < $idadeMaior){
 echo "Adolecente";
}else if($qualSuaIdade < $idadeMelhor){
 echo "Adulto";   
}else{
  echo "Idoso";   
}
echo "<br>"; 


// operador ternarioo
echo ($qualSuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";
echo "<br>";


// Switch Case
$diaSemana = date("w");
switch($diaSemana){

    case 0: echo "Domingo";
    break;
    case 1: echo "Segunda";
    break;
    case 2: echo "Terça";
    break;
    case 3: echo "Quarta";
    break;
    case 4: echo "Quinta";
    break;
    case 5: echo "Sexta";
    break;
    case 6: echo "Sabado";
    break;
    default: echo "Data Invalida";
}

echo "<br>";

// Laços de Repetiçao. Primeira Parte onde começa ate onde ele vai e o incremento.

for($i = 0; $i < 10; $i++){

    //echo $i ."<br>";
}
echo "<br>";


for($i = 0; $i < 1000; $i++){

    if($i >= 200 && $i <= 800) continue;

    if($i == 900)break;

    //echo $i ."<br>";
}
echo "<br>";

//for ($i = 0; $i < 10; $i--){
//echo $i;
//}




echo "<select>";

for ($i = date("Y"); $i > date("y")-100; $i--){
     
    echo '<option value'. $i .'>'.$i. '</option>';
}

echo "<select>";















?>