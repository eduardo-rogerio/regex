<?php

echo "Expressões Regulares \n";
echo "Exemplo 4 - conjuntos \n";

$pattern = '/[a-zA-Z]/';
//$pattern = '[0-9]';

$source = 'canal wdev youtube';
//$source = '1234234';

$result = preg_match($pattern,$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
 
