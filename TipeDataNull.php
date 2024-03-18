<?php

$name = "aldizar";
$name = null;

$age = null;

echo "name : ";
echo $name;
echo "\n";

echo "age : ";
echo $age;
echo "\n";  

//is_null($nama variablemya) untuk mengcek apakah null itu ada datanya atau ga
echo "Is name NUll? : ";
var_dump(is_null($name));
echo "\n";

//unset($nama variablenya) untuk menghapus variable
$contoh = "aldizar";
unset($contoh);
echo $contoh;

//isset($nama variablenya) untuk mengcek apakah sebuhan variable bernilai true atau false
var_dump(isset($contoh));