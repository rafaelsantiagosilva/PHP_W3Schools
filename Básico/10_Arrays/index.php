<?php
# Básico de Arrays
$cars = array("Volvo", "BMW", "Toyota");

$cars_length = count($cars); // Quantos items tem no array

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964); // Arrays associados, tipo dicionários em Python
echo "<p>" . $car["year"] . "</p>"; // Imprime 1964
$car["brand"] = "Chevrolet"; // Muda o valor de brand

function my_function()
{
     echo "Eu vim de uma função!";
}

// $my_array = array("car"=>"Volvo", "age"=>15, "message"=>my_function);
// $my_array["message"](); Não funciona por algum motivo!

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
     $x = "Ford";
}
unset($x); // Para desligar o $x da função de foreach, se não ele vai continuar referenciando o último valor do array

# Modificando arrays
array_push($cars, "Ford"); // Adicionar mais um valor e mais um index para ele
echo "<p>" . var_dump($cars) . "</p>";

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964]; // Adicionando vários items de uma vez
echo "<p>" . var_dump($cars) . "</p>";

$cars = ["Volvo", "BMW", "Toyota"];
array_splice($cars, 1, 1); // Em qual indíce começa e quantos items, a partir dele, se deseja remover

$cars = ["Volvo", "BMW", "Toyota"];
unset($cars[1]); // Remove sem reajustar os índices. Tem como fazer com vários de uma vez

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$new_cars_array = array_diff($cars, ["Mustang", 1964]); // Usando valores como parâmetro, de um array associado

$cars = ["Volvo", "BMW", "Toyota"];
array_pop($cars); // Remove o último item
array_shift($cars); // Remove o primeiro item

# Ordenando arrays
$cars = ["Volvo", "BMW", "Toyota"];
sort($cars); // Em ordem alfabética ou crescente
rsort($cars); // Em ordem 'analfabética' ou decrescente

$age = ["Peter"=>35, "Ben"=>37, "Joe"=>43];
ksort($age); // Em ordem alfabética ou crescente, de acordo com a chave
krsort($age); // Em ordem 'analfabética' ou decrescente, de acordo com a chave
asort($age); // Em ordem alfabética ou crescente, de acordo com o valor
arsort($age); // Em ordem 'analfabética' ou decrescente, de acordo com o valor
?>