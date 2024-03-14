<?php
/*
     Strings
     Integer
     Float
     Boolean
     Array
     Object
     NULL
     Resurce -> Funções externas, como chamar uma base de dados
*/

$string = (string) "Hello World";
$integer = (integer) 5;
$float = (float) 5.34;
$boolean = (boolean) true;
$array = (array) ["Volvo", 1, false];

class MyClass
{
     public $name;
     public $color;

     public function __construct($name, $color)
     {
          $this->name = $name;
          $this->color = $color;
     }
}

$myObject = new MyClass("Teste", "Azul");
var_dump($myObject);
?>