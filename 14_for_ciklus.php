<?php


for ( $i = 0; $i < 10 ; $i++) { 
    echo 'Hello'. $i . PHP_EOL;
}


// örök ciklus lesz mert a szám soha nem lesz 10, mivel 3-al emelem a $szam értékét
for ( $szam = 0 ; $szam != 10 ; $szam += 3){
    echo 'Hello'. $szam . PHP_EOL;
}


$nevek = ["Andi", "Erika", "Ildiko", "Zsuzsi", "Aniko"];

for( $i = 0; $i < count($nevek); $i++){
    echo "Hello " . $nevek[$i] . PHP_EOL;
}
