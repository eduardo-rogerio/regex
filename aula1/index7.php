<?php

echo "Expressões Regulares \n";
echo "Exemplo 7 - uma ou muitas ocorrências opcionais \n";

//$pattern = '/[0-9]{4}$/';
$pattern = '/jpe*g/';

//$source = 'canal wdev youtube 2024';
$source = 'jpeeeg';

$result = preg_match($pattern,$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
 
