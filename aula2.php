<?php
// difernça de aspas duplas e simples em Strings
$nome =  "ualisson";
$nome2 = 'Ualisson';
var_dump($nome,$nome2);

echo "<br>";
// Define o que é variavel.
echo "ABC $nome";
echo "<br>";
// tudo dentro de aspas simples vira texto.
echo 'ABC $nome';
echo "<br>";

// Mudar Tudo que vem na varial para Maiusculo
$nome = "ualisson wagner";
echo strtoupper($nome);
echo "<br>";

// Mudar Tudo que vem na varial para Minusculo
$nome = "UALISSON WAGNER";
echo strtolower($nome);
echo "<br>";

// Mudar Apenas a Primeiro de cada Palavra
$nome = "ualisson wagner";
echo ucwords($nome);
echo "<br>";

// Mudar Apenas Sóa  Primeira letra do nome
$nome = "ualisson wagner";
echo ucfirst($nome);
echo "<br>";


// Trocar Palabras  utilizando o replace
$empresa = "TecpProg";
$empresa = str_replace("o","0",$empresa);
$empresa = str_replace("g","G",$empresa);
echo "$empresa";
echo "<br>";


// Buscar palavras dentro um frase
$frase = "eu quero ficar muito rico e milionario";
$q = strpos($frase, "rico");
var_dump($q);
echo "<br>";

// Buscar o que vem depois da palavra rico no exemplo.
$texto = substr($frase,0,$q);
var_dump($texto);
echo "<br>";

// Buscar e conta o tamanho de String
$palavra = "rico";
$texto2 = substr($frase,$q + strlen($palavra), strlen($frase));
var_dump($texto2);

?>