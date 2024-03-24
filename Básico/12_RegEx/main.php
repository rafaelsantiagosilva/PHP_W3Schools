<?php 
$str = "Visit W3Schools";
$pattern = "/w3schools/i"; // Uma expressão sem case-sensitive

echo preg_match($pattern, $str);
?>