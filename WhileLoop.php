<?php

$counter = 1;

while ($counter <= 10){
    echo "hallo while loop ke - $counter" . PHP_EOL;
    $counter++;
}

// altenative syntax
$counter = 1;
while ($counter <= 10):
    echo "hallo while loop ke - $counter" . PHP_EOL;
    $counter++;
endwhile;