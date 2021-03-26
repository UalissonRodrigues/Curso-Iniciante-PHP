<?php

// Criando sesão de PHP

 session_start();

 $_SESSION["nome"] = "Ualisson";

echo "<br>";

// Buscando a seção do arquivo config.php onde ela esta Start
 require_once("config.php");


?>