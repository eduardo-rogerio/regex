<?php

echo "Expressões Regulares \n";
echo "Exemplo 5 - ocorrências definidas \n";

//$pattern = '/[0-9]{4}$/';
$pattern = '/^[0-9]{4}[a-z]{2,4}$/';

//$source = 'canal wdev youtube 2024';
$source = '2024wdev';

$result = preg_match($pattern,$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
 
