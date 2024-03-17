<?php
// Funciona como em qualquer outra linguagem, vou passar aqui somente diferenciais

function set_height($min_height = 50) // Valor padrão caso não passe um parâmetro
{
     echo "<p>A altura é $min_height</p>";
}

set_height();
set_height(120);

function add_five(&$value) // Passa por referência, ou seja, muda o valor da variável passada
{
     $value += 5;
}

$random_number = rand(0, 10);

echo "<p>Número aleatório: $random_number</p>";
add_five($random_number);
echo "<p>Número aleatório +5: $random_number</p>";

function show_the_evens(...$numbers)
{
     foreach ($numbers as $number) {
          if ($number % 2 == 0) {
               echo "Número par: $number\n<br />";
          }
     }
}

$random_numbers_to_show_even_function = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "<p>Números aleatórios gerados: ";

foreach ($random_numbers_to_show_even_function as $key => $number) {
     if ($key != array_key_last($random_numbers_to_show_even_function)) {
          echo "$number, ";
     } else {
          echo "$number.";
     }
}

echo "</p>";

show_the_evens(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

?>