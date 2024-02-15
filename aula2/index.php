<?php
 
echo "Expressões Regulares - Parte 2 \n";
echo "Exemplo 1 - Classes de caracteres \n";
echo "1.1 - Palavras e espaços \n";

//$pattern = '/^[a-zA-Z0-9 ]+$/'; conjunto de caracteres
$pattern = '/^[\w\s]+$/'; //alfanuméricos e underline + espaços/tabs/quebas de linhas
 
$source = 'canal wdev';

$result = preg_match($pattern,$source); 

echo "$pattern \n";
echo "$source \n";
echo "$result \n";
