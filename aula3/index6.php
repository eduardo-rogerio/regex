<?php

echo "Expressões Regulares - Parte 4 \n";
echo "Exemplo 6 - Lookbehind \n";

$pattern = '/(?<=\d)[a-z]+/'; // valida o que vem antes

$source = '100px 50 200m 98 10kg metro';

$result = preg_match_all($pattern, $source, $matches);
//$replace = preg_replace($pattern,'',$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
print_r($matches);
//print_r($replace);
