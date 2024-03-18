<?php

//Assign By Reference
$name = "Aldizar";

$otherName = &$name;
$otherName = "Muhamad";

echo $name . PHP_EOL;

//Pass By Reference
function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);
echo $counter . PHP_EOL;

//Returing References
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;