<?php

$counter = 1;

while (true){
    echo "hallo while loop ke - $counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}
