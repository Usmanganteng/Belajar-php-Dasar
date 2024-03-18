<?php

$name = "Aldizar"; // Global scope

function sayHello() {
    // global $name; //global keyword
    echo "Hello {$GLOBALS['name']}" . PHP_EOL;
}

sayHello();