<?php

//single quote :''
echo 'Name :';
echo 'Muhamad Aldizar ILham';
echo "\n";

//double Quote : ""
echo "Name :";
echo "Muhamad\t Aldizar\t Ilham\n";

//multiline String

//heredoc
echo <<<text
ini adalah contoh sting yang sanngat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga

text;

//nowdoc
echo <<<'text'
ini adalah contoh sting yang sanngat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga
text;