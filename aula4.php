<?php

// Utilizando  o include que vem da aula 3
// diferença de include e require --> include Tenta solucionar o erro . ->> require Ele trava e nao funciona se tive erro.
// Evitar incluir arquivos apenas uma vez  include_onde ou  require_once.

include "funcao/aula3.php";

require "funcao/aula3.php";

$resultado = somar(11,25);

echo $resultado;


?>