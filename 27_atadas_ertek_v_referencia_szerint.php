<?php

$number = 10;

// átadni egy argumentumot érték alapján - pass by value
function teszt1($num){
    $num += 5;
}

teszt1($number);  //a $number változó másolata került átadásra
echo $number;  //hiába adtuk át a fv-nek a $number értéke 10 maradt.


// átadni egy argumentumot referencia alapján - pass by reference

function teszt2(& $num){
    $num += 5;
}

teszt2($number); //a $number változó eredetije (referenciája) került átadásra
echo $number; //a $number értéke 15 lesz, megváltozott az eredeti érték.

