<?php
 
echo "Expressões Regulares - Parte 2 \n";
echo "Exemplo 2 - Classes de caracteres \n";
echo "1.4 - Fronteira \n";

$pattern = '/\bpropor\b/';
 
$source = 'ação de proporcionar uma festa';

$result = preg_match($pattern,$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
