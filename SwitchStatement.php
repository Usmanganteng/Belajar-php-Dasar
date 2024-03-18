<?php

$nilai = A ;

switch ($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "anda lulus" . PHP_EOL;
    break;
    case "D":
        echo "anda tidak lulus" . PHP_EOL;
    break;
    default:
    echo "anda mungkin salah jurusan" . PHP_EOL;   
}