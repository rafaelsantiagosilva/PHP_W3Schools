<?php
/*
     Com aspas duplas, pode se colocar variáveis e simbolos especiais
     Com aspas simples, é literalmente o que foi digitado
*/

$string1 = "Hello World!";
$lengthString1 = strlen($string1);

$wordsInTheString = str_word_count($string1);

$worldPosition = strpos($string1, "world"); // A posição do primeiro caracter ou FALSE
?>