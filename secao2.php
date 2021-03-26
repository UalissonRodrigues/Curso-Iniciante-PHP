<?php

// Criando sesão de PHP

 session_start();

 echo $_SESSION['nome'];

 echo "<br>";

// Buscando a seção do arquivo config.php onde ela esta Start
 require_once("config.php");
 
// Comando para apagar varialvel de sesão, se nao passar ela dentro no parentes ele apaga todas.
 session_unset();

// Comando para  tira da sessão.
session_destroy();

 echo $_SESSION['nome'];



?>