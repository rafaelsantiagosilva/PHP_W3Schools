<?php
$x = 5; // Escopo global

function myFunction()
{
     // Vai dar erro pois não tem x aqui
     // echo "Variável $x!";
}

echo "Variável $x!"; // Aqui sem erro

function myFunction2()
{
     $x = 5; // Escopo local
     echo "Variável $x!"; // Agora funciona!
}
?>

<?php
// A palavra chave "global"
$n1 = 5;
$n2 = 10;

function somar()
{
     global $x, $y; // Inserindo diretamente as variáveis globais aqui
     $y += $x;
}

somar();
echo $y; // Imprimindo 15

// Pode s=usar uma super global $GLOBALS também
// é um array com todas as variáveis

function subtrair()
{
     $GLOBALS['y'] -= $GLOBALS['y'];
}

subtrair();
echo $y; // Imprimindo 0
?>

<?php
// Palavra chave "static"
function teste()
{
     static $x = 0; // Faz com que a variável não seja apagada/zerada após o término da função
     echo $x;
     $x++;
}
?>