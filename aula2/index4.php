<?php
 
echo "Expressões Regulares - Parte 2 \n";
echo "Exemplo 2 - Flags \n";
echo "2.1 - Case insensitive \n";

$pattern = '/^[a-z ]+$/i';
 
$source = 'canal WDEV';

$result = preg_match($pattern,$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
