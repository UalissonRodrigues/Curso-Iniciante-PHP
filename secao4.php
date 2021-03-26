<?php
// Funcoes do php para seção
require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

switch(session_status()){
    case PHP_SESSION_DISABLED;
    echo"Desabilitado";
    break;

    case PHP_SESSION_NONE;
    echo"Nome Ativo";
    break;

    case PHP_SESSION_ACTIVE;
    echo"Ativado";
    break;
}

?>