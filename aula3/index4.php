<?php

echo "Expressões Regulares - Parte 4 \n";
echo "Exemplo 1 - Grupos não capturados\n";

$pattern = '/^(?:facebook|youtube): ([\w@\-]+)$/';

$source = 'youtube: @wdevoficial';

$result = preg_match_all($pattern, $source, $matches);
//$replace = preg_replace($pattern,'',$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
print_r($matches);
//print_r($replace);
