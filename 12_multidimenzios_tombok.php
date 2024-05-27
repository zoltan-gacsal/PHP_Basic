<?php

//Multidimensional arrays - Multidimenziós tömbök

//1.példa
$pelda = [
    [1,2,3], [4,5,6], [[7,8,9], [10,11,12]]
];
print_r($pelda);


//2.példa
$konyvek = [
    [
        "cim" => "A gulag szigetvilág",
        "szerző" => "Alexander"
    ],
    [
        "cim" => "Alapitvány trilógia",
        "szerző" => "Isaac Asimov"
    ],
    [
        "cim" => "A Dűne",
        "szerző" => "Frank Herbert"
    ]
];

print_r($konyvek);