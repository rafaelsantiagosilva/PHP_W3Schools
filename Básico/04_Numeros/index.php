<?php
// Algumas constantes de int:
echo PHP_INT_MAX;
echo PHP_INT_MIN;
echo PHP_INT_SIZE;

// Algumas funções para detectar se o número é Integer:
echo is_int(5);
echo is_integer(5.45);
echo is_long(1);

// Algumas constantes de float:
echo PHP_FLOAT_MAX;
echo PHP_FLOAT_MIN;
echo PHP_FLOAT_DIG; // O número máximo de decimais que pode ser usado com precisão
echo PHP_FLOAT_EPSILON; // O menor número positivo possível

// Algumas funções para detectar se o número é Float:
echo is_float(5.0);
echo is_double(5);

// Finitos e Infinitos:
echo is_infinite(1.9e411); // Acima do PHP_FLOAT_MAX
echo is_finite(999999999999999999);

// Not A Number:
echo is_nan("Roberto");

// Is Numeric:
echo is_numeric("1"); // Retorna 1 se for numero, tanto em string quanto int/float
echo is_numeric(1);


?>