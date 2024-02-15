<?php
 
echo "Expressões Regulares - Parte 2 \n";
echo "Exemplo 3 - Removendo caracteres indesejados \n";

$pattern = '/\D/';
 
//$source = '123.456.789-10';
$source = '+55 (11) 9 3452-8978';

$result = preg_match_all($pattern,$source,$matches); 
$replace = preg_replace($pattern,'',$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
print_r($matches);
print_r($replace);
