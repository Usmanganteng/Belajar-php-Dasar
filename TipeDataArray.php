<?php

$values = array(1, 2, 3, 4);
var_dump($values);

$names = ["Muhamad", "Aldizar", "Ilham"];
var_dump($names);

//operasi pada array

//mengakses data di array pada nomor index
$mengambil_data = ["1", "2", "3" ,"4"];
var_dump($mengambil_data[1]); //$nama_arraynya[nomor_indexnya]

//mengubah data di array pada nomor index dengan value baru
$mengubah_data = ["budi", "yanto", "memet"];
$mengubah_data[0] = "aldizar"; //$nama_arraynya[nomor_indexnya] = value_barunya

//menambah data di array pada posisi paling belakang
$menambah_data = ["1", "2", "3", "4", "5"];
$menambah_data[] = 6; // $nama_arraynya[nomor_indexnya] = ini value nya

//menghapus data di array, index otomatis hilang dari array
$menghapus_data = ["1", "2", "3", "4", "5"];
unset($menghapus_data[0]); //unset($nama_array[nomor_index])

//mengabil total data di array
$mengambil_total_data = ["1", "2", "3", "4", "5", "6"];
var_dump(count($mengambil_total_data)); //count($nama array nya)




//array map
$ilham = array(
    "id" => "eko",
    "name" => "aldizar ilham",
    "age" => 16
);

$aldizar = [
    "id" => "aldizar",
    "name" => "ilham aldizar",
    "age" => 16
];

//array dalam array
$aldizar = [
    "id" => "aldizar",
    "name" => "ilham aldizar",
    "age" => 16,
    "address" => [
        "city" => "jakarta",
        "country" => "indonesia"
    ]
];
