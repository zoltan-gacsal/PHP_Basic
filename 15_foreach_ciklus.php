<?php

$nevek = ["Andi", "Erika", "Ildiko", "Zsuzsi", "Aniko"];

//sima foreach ciklus
foreach($nevek as $name){
    echo "Hello " . $name . PHP_EOL;
}


//index számmal visszaadott foreach ciklus
foreach($nevek as $index => $name){
    echo "Index:" . $index . " Érték: " . $name . PHP_EOL;
}


//asszociativ tömbön a foreach ciklus
$nevek_es_korok = [
    "Andi" => 32,
    "Ildi" => 23,
    "Zsani" => 54,
    "Viola" => 34
];

foreach($nevek_es_korok as $nev => $kor){
    echo $nev . "-" . $kor . PHP_EOL;
}
