<?php 
declare(strict_types=1);

$x = 0; // Criando uma variável de escopo global

if ($x === 0){
     global $y; // Criando uma variável global dentro de um escopo
     $y = 100;
}

echo $GLOBALS["x"];
echo $GLOBALS["y"];

?>