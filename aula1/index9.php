<?php

echo "Expressões Regulares \n";
echo "Exemplo 9 - replace com grupos \n";

$pattern = '/^([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})$/';
 
$source = '22250184569';

$result = preg_match($pattern,$source,$matches); 
$replace = preg_replace($pattern,'$1.$2.$3-$4',$source);

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
print_r($matches);
print_r($replace);
 
