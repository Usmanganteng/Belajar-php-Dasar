<?php
$sayHello = function (string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHello("aldizar");
$sayHello("lucian");

//cara penerapannya
function sayGoodBye(string $name, $filter)
{
    $fanilName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Eko", function (string $name): string{
return strtoupper($name);
});


// mengakses variable luar
$NamaPertama = "aldizar";
$NamaTerakhir = "ilham";

$sayHelloAldizar = function () use ($NamaPertama, $NamaTerakhir) {
    echo "hello $NamaPertama $NamaTerakhir" . PHP_EOL;
};

$sayHelloAldizar();