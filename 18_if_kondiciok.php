<?php

// if conditionals - if kondiciók | feltételek


$szam1 = 10;
$szam2 = 10;

if ($szam1 < $szam2) {
    echo "kissebb" . PHP_EOL;
}
elseif ($szam1 > $szam2) {
    echo "nagyobb" . PHP_EOL;
}
elseif ($szam1 != $szam2){
    echo "nem egyenlő" . PHP_EOL;
}
else{
    echo "egyenlő" . PHP_EOL;
}


// if kondiciók láncolása

$eletkor = 25;

if ($eletkor <= 5){
    echo "Egyél csokit" . PHP_EOL;
}
elseif($eletkor > 5 and $eletkor <= 10){
    echo "Igyál narancslevet" . PHP_EOL;
}
elseif($eletkor > 10 and $eletkor <= 15){
    echo "Megkóstolhatod a kávét" . PHP_EOL;
}
elseif($eletkor > 15 and $eletkor < 18){
    echo "Igyál egy pohár bort" . PHP_EOL;
}
else {
    echo "Felnőtt vagy!" . PHP_EOL;
}


