<?php
 
echo "Expressões Regulares - Parte 2 \n";
echo "Exemplo 2 - Flags \n";
echo "2.2 - Global search \n";

$pattern = '/([\w]+) (wdev)/i';
 
$source = 'canal wdev
youtube wdev';

$result = preg_match_all($pattern,$source,$matches); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
print_r($matches);
