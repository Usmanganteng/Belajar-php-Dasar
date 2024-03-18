<?php

$NamaPertama = "Aldizar";
$NamaTerakhir = "ilham";

// jika menggunakan anonymous function
$anonymousFunction = function () use ($NamaPertama, $NamaTerakhir) {
    return "Hello $NamaPertama $NamaTerakhir" . PHP_EOL;
};

// jika menggunakan arrow function
$arrowFunction = fn() => "Hello $NamaPertama $NamaTerakhir" . PHP_EOL ;

echo $anonymousFunction();
echo $arrowFunction();