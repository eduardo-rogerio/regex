<?php

echo "Expressões Regulares \n";
echo "Exemplo 8 - grupos \n";

$pattern = '/^([0-9a-zA-Z\-]+)(\.txt)$/';
 
$source = 'teste-legal.txt';

$result = preg_match($pattern,$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
 
