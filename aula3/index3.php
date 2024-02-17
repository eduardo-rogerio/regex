<?php

echo "Expressões Regulares - Parte 3 \n";
echo "Exemplo 3 - Nomeando grupos \n";

$pattern = '/^(?<redeSocial>\w+): (?<username>[\w@\-]+)$/';

$source = 'youtube: @wdevoficial';

$result = preg_match_all($pattern, $source, $matches);
//$replace = preg_replace($pattern,'',$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
print_r($matches);
//print_r($replace);
