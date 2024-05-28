<?php

// functions - függvények


$nevek1 = ["Andi", "Erika", "Ildiko", "Zsuzsi", "Aniko"];
$nevek2 = ["Tibor", "Zoltan", "Attila", "Ferenc", "Bence"];


//1.példa
// function koszontes($nev_tomb){
//     foreach($nev_tomb as $nev){
//         echo "Hello " . $nev . PHP_EOL;
//         //echo "Hello " . strtoupper($nev) . PHP_EOL?
//     }
// }
// koszontes($nevek1);


//2.példa
function koszontes($nev_tomb, $udvozol){
    foreach($nev_tomb as $nev){
        //echo $udvozol. " " . $nev . PHP_EOL;
        echo "$udvozol $nev" . PHP_EOL;
    }
}
koszontes($nevek1, "SZEVA");
koszontes($nevek2, "CSŐVÁZ");



//function definition________________________________________________
function osszeadas($x, $y){
    return $x + $y;
};

//anonymous function - function expression___________________________
$osszeadas1 = function($x, $y){
    return $x + $y;
};

//Calling____________________________________________________________
$szam1 = osszeadas(2, 5);
echo $szam1 . PHP_EOL;

$szam2 = $osszeadas1(3, 44);
echo $szam2 . PHP_EOL;



