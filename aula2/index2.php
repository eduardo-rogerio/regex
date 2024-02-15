<?php
 
echo "Expressões Regulares - Parte 2 \n";
echo "Exemplo 2 - Classes de caracteres \n";
echo "1.2 - Caracteres numéricos \n";

//$pattern = '/^[0-9]+$/'; conjunto de caracteres
$pattern = '/^[\d]+$/'; // caracteres numéricos
 
$source = '1234245';

$result = preg_match($pattern,$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
