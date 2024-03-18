<?php

function sayHello($name) {
    echo "Hello $name" . PHP_EOL;
}

sayHello("Aldizar");
sayHello("Lucian");

// Defaulit aragument value
function hello($names = "Anonymous") {
    echo "Hello $names" . PHP_EOL;
}
hello();
hello("Lucian");

// type declaration
function sum(int $pertama, int $kedua) {
    $total =$pertama + $kedua;
    echo "total $pertama + $kedua = $total" . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);

//Variable-length Argument list
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "total" . implode(" + ", $value) . " = $total" . PHP_EOL;
}

sumAll(10, 20, 30, 40,);
