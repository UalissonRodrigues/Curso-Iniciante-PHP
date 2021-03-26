

/*
$meses = array("Janeiro", "Fevereiro","Março","Abril", "Maio", "junho","julho","Agosto","Setemnbro");

foreach ($meses as  $index => $mes){
    echo "indice:" .$index;
    echo "O mês é : ".$mes;
}

*/

<form>

<input type="text" name= "name">
<input type="date" name= "nascimento">
<input type="submit" name= "Enviar">

</form>

<?php

foreach ($_GET as $key => $value){

    echo "Nome fo camppo ".$key;

    echo "Valor do Campo ".$value;

    echo "<br>";
}




?>