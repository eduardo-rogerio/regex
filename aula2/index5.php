<?php
 
echo "Expressões Regulares - Parte 2 \n";
echo "Exemplo 2 - Flags \n";
echo "2.2 - Multi-line \n";

$pattern = '/^wdev$/im';
 
$source = 'wdev
wdev';

$result = preg_match($pattern,$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
