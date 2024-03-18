<?php

function foo()
{
    echo "foo" . PHP_EOL;
}

function bar()
{
    echo "bar" . PHP_EOL;
}

$PanggilFoo = "foo";
$PanggilFoo();

$PanggilBar = "bar";
$PanggilBar();

//penggunaan variable
function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "HELLO $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "sample $name";
}

sayHello("Eko", "sampleFunction");
sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");

sayHello("aldizar", "strtoupper");
sayHello("aldizar", "strtolower");
