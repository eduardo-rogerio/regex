<?php

echo "Expressões Regulares \n";
echo "Exemplo 2 - estrutura \n";

$pattern = '/^youtube/';

$source = 'youtube canal wdev';

$result = preg_match($pattern,$source);

echo "$pattern \n";
echo "$source \n";
echo "$result \n";

