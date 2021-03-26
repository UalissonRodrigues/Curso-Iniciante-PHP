<?php

// While como fazer um while
$condição = true;

while ($condição){

    $numero = rand(1,10);
    if( $numero == 3){

        echo "TRês";
        $condição = False;
    }
    
    echo $numero. " ";
}


// como fazer um do while
$total = 150;

$desconto = 0.9;

do {

    $total *= $desconto;

} while ($total > 100);
    echo $total;






?>