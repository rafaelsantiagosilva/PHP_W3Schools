<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Foreach</title>
     <style>
          * {
               color: #fff;
               font-family: Arial, sans-serif;
          }

          body {
               background-color: #000;
          }

          main {
               display: flex;
               flex-wrap: wrap;
               justify-content: space-around;
          }

          article { 
               border: 1px solid #fff;
               border-radius: 10px;
               padding: 15px;
               margin: 1em;
          }
     </style>
</head>
<body>
     <h1 align="center">Foreach</h1>
     <main>
          <article>
               <h2>Cores</h2>
               <?php
               $colors = ["red", "green", "blue", "yellow"];

               foreach ($colors as $color) {
                    echo "<p style='color: $color'>$color</p>";
               }
               ?>
          </article>
          
          <article>
               <h2>Membros</h2>
               <?php
               $members = ["Peter" => "35", "Ben" => "37", "Joe" => "43"]; // Par chave-valor, dicionário
               
               foreach ($members as $name => $age) { // Usando o par chave-valor
                    echo "<p>$name : $age anos</p>";
               }
               ?>
          </article>
          
          <article>
               <h2>Carro</h2>
               <?php
               class Car
               {
                    public $color;
                    public $model;
                    public function __construct($model, $color)
                    {
                         $this->model = $model;
                         $this->color = $color;
                    }
               }

               $my_car = new Car("Volvo", "red");

               foreach ($my_car as $key => $value) { // Usando com objetos, parecido com par chave-valor
                    echo "<p>$key : $value</p>";
               }
               ?>
          </article>
          
          <article>
               <h2>Cores (sem azul e amarelo)</h2>
               <?php
               foreach ($colors as $color) {
                    if ($color === "blue") {
                         break;
                    }

                    echo "<p style='color: $color'>$color</p>";
               }
               ?>
          </article>

          <article>
               <h2>Cores (sem o azul)</h2>
               <?php
               foreach ($colors as $color) {
                    if ($color === "blue") {
                         continue;
                    }

                    echo "<p style='color: $color'>$color</p>";
               }
               ?>
          </article>

          <article>
               <h2>Cores (com rosa no lugar do azul)</h2>
               <?php
               foreach ($colors as $color) {
                    if ($color === "blue") {
                         $color = "pink"; // Troca somente aqui, não afeta o array
                    }

                    echo "<p style='color: $color'>$color</p>";
               }

               echo "<p>" . var_dump($colors) . "</p>";

               foreach ($colors as &$color) { // Aqui troca o azul, porque estamos referenciando diretamente o array
                    if ($color === "blue") {
                         $color = "pink"; 
                    }

                    echo "<p style='color: $color'>$color</p>";
               }

               echo "<p>" . var_dump($colors) . "</p>";
               ?>
          </article>
     </main>
</body>
</html>