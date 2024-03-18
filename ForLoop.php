<?php

for (;;){
    echo "ini looping tak terhenti" . PHP_EOL ;
}

// pengulangan dengan kondisi

$counter = 1;
for (; $counter <= 10;){
    echo "halo for loop ke-$counter" . PHP_EOL;
    $counter++;
}

// pengulangan dengan init statement


for ($counter = 1; $counter <= 10;){
    echo "halo for loop ke-$counter" . PHP_EOL;
    $counter++;
}

// pengulangan dengan post statement

for ($counter = 1; $counter <= 10;   $counter++){
    echo "halo for loop ke-$counter" . PHP_EOL;
}

// syntax alternative for loop

for ($counter = 1; $counter <= 10;   $counter++) :
    echo "halo for loop ke-$counter" . PHP_EOL;
endfor;