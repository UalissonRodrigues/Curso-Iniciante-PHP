<?php

// declarando uma variavel
$nome =  "Ualisson";

// echo mostra o que esta vindo na variavel.
echo $nome;
echo "<br>";


// Mostra o que esta trazendo na variavel e o tipo de variavel.
var_dump($nome);

echo "<br>";
// Metodo de declarar variavel, começa minuscolo e a segunda palavra masiuscula.
$anoNascimento = 1995;

echo $anoNascimento;

// Apaga o conteudo da variavel.
unset($anoNascimento);

// Verifica se existe dados dentro da variavel.
if(isset($anoNascimento)){

    echo $anoNascimento;
}

echo "<br>";
//Concatenação variaveis 
$nomePrimeiro = "Ualisson Wagner ";
$nomeSegundo = "Freitas Rodrigues";

// Realizando a Concatenação 
$nomeCompleto = $nomePrimeiro . " ". $nomeSegundo;

echo $nomeCompleto;
echo "<br>";


// Tipos de dados basicos
$nome = "Teste";
$email = "ualissonwagner@hotmail.com";
$ano = 1995;
$salario = 50.00;
$bloqueado = false;


// Tipo de dados Composto, ( ARRAY E OBJETOS)
$frutas = array("abacaxi", "Manja","Banana");

// mostrando posição dentro do vetor, no caso a fruta é a banana.
echo $frutas[2];

echo "<br>";

$ano1 = new DateTime();

var_dump($ano1);


echo "<br>";

// Tipo de dados especial.
$arquivo = fopen("aula1.php","r");
var_dump($arquivo);

echo "<br>";


// Nulo é a ausensia de valor        Vazio foi iniciado mais nao tem dados.
$varialNula = null;


// Variaveis pre definidas. Todos os dados que vai receber da url. ARRAYS SUPER GLOBAIS

$nome = (int)$_GET["a"];
//var_dump($nome);

echo "<br>";


$ip = $_SERVER["SCRIPT_NAME"];

var_dump($ip);


// Escopo de Variavel é uma variavel local, o escopo  e definido pelas chaves.{}

// Chamando um função global.
$nome = "higor";
function teste(){
   global $nome;
   echo $nome;
}

teste();


// chamando a função dentro da  função 
function teste2(){
    $nome =  "Ualisson";
    echo $nome."teste 2";
}
teste2();



?>