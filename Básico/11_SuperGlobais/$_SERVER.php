<?php
function println($message)
{
     echo "\n<p>$message</p>";
}

println($_SERVER['PHP_SELF']); // O nome do arquivo atual com o path
println($_SERVER['SERVER_NAME']); // Nome do servidor
println($_SERVER['HTTP_HOST']); // Haeder do servidor
println($_SERVER['HTTP_REFERER']); // Path do servidor
println($_SERVER['HTTP_USER_AGENT']); // O que o servidor usa
println($_SERVER['SCRIPT_NAME']); // O nome do arquivo atual com o path
?>