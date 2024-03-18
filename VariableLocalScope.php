<?php
function createName()
{
    $name = "Aldizar"; //local scope
}

createName();
echo $name . PHP_EOL;