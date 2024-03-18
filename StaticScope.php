<?php

function increment()
{
    static $counter = 1; //static scopr

    echo "counter : $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();