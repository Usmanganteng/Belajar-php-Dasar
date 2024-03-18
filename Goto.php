<?php

// cara menggunakan goto yang simple
goto a;
echo "hello dunia" .PHP_EOL;

a:
echo "hello a" .PHP_EOL;

// cara menggunakan goto yang sedikit rumit
$counter = 1;

while (true){
    echo "hallo while loop ke - $counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "end loop";