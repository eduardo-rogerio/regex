<?php

echo "Expressões Regulares - Parte 3 \n";
echo "Exemplo 2 - Caracteres com acento \n";

$pattern = '/([a-zá-ùÁ-Ù]+)/i';

$source = 'programação PROGRAMAÇÃO';

$result = preg_match_all($pattern, $source, $matches);
//$replace = preg_replace($pattern,'',$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
print_r($matches);
//print_r($replace);
