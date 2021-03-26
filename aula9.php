<?php

//  CONHECENDO O JSON  - TRANSFORMANDO O ARRAY EM JSON  E JSON EM ARRAY

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
//TRANSFORMANDO O ARRAY EM JSON
   echo json_encode($pessoas);

   echo "<br>";

//TRANSFORMANDO JSON EM ARRAY
   $json = '[{"nome":"Ualisson","Idade":25},{"nome":"Higor","Idade":23}]';

   $data = json_decode($json, true);

   var_dump($data);








?>