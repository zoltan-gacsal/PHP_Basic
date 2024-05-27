<?php

$szam1 = 5;
$szam2 = 5.6;

$szoveg1 = "Megtanulom a php-t";

$nevek = ["Zsuzsi", "Zoli"];
$korok = [16, 32, '560'];

// sima kiíratásra jó az echo vagy a print függvény

//echo $szam1 . "\n";  //hozzáfűzés karakter a PONT és uj sor karakter következik
//echo $szam1 . PHP_EOL;  // ez globálisan adja hozzá az uj sort EOL = End of line
//echo $szam2 . PHP_EOL;
//echo $szoveg1;

//tömböket nem tudok echo-val kiíratni, var_dump vagy print_r

//var_dump($nevek);
//var_dump($korok);

print_r($szam1);