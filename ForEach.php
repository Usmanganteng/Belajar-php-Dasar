<?php
// tanpa for each
$names = ["muhammad", "aldizar", "ilham"];

for ($i = 0; $i < count($names); $i++) {
    echo "hello $names[$i]" . PHP_EOL;
}

// Dengan for each
foreach ($names as $name) {
    echo "data $name" . PHP_EOL;
}

// for each dengan key

$person = [
    "nama_pertama" => "muhamad",
    "nama_tengah" => "aldzar",
    "nama_terakhir" => "ilham"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}