<?php

echo "Expressões Regulares \n";
echo "Exemplo 1 - estrutura \n";

$pattern = '/youtube/';

$source = 'canal wdev youtube';

$result = preg_match($pattern,$source);

echo "$pattern \n";
echo "$source \n";
echo "$result \n";

