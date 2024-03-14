<?php
class Test
{
     public function write_the_class_name()
     {
          echo __CLASS__; // Nome da classe, dentro do escopo de uma classe
     }

     public function write_the_method_name()
     {
          echo "\n" . __METHOD__; // O nome do método da classe e o nome da classe

     }
}

$obj = new Test();
$obj->write_the_class_name();

echo "\n" . __DIR__; // A pasta/path que está o arquivo

echo "\n" . __FILE__; // O path do arquivo com ele incluso

function write_function_name()
{
     echo "\n" . __FUNCTION__; // O nome da função, em um escopo de função
}

write_function_name();

echo "\n" . __LINE__; // Número dessa linha atual

$obj->write_the_method_name();

// __TRAIT__ e __NAMESPACE__ possuem o mesmo efeito que __CLASS__ e __FUNCTION__
?>