<?php

echo "Expressões Regulares \n";
echo "Exemplo 6 - ocorrências opcionais \n";

//$pattern = '/[0-9]{4}$/';
$pattern = '/jpe?g/';

//$source = 'canal wdev youtube 2024';
$source = 'jpg';

$result = preg_match($pattern,$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
 
