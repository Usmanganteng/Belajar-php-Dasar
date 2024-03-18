<?php

function factorialrecursive(int $value): int
{
    if ($value == 1){
        return 1;
    } else {
        return $value * factorialrecursive($value -1);
    }
}

var_dump(factorialrecursive(6));

function loop(int $value)
{
    if ($value == 0) {
        echo "end loop" . PHP_EOL;
    }else {
        echo "loop-$value" . PHP_EOL;
    }
}

loop(100);