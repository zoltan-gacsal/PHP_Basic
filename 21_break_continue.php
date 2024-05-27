<?php

$noi_nevek = ["Andi", "Erika", "Zsuzsi", "Nikolett", "Eva"];
$ferfi_nevek = ["Tibor", "Zoltan", "Attila", "Ferenc", "Bence"];

// "zsuzsi" előtti neveket kiírja és vége a ciklusnak
foreach ($noi_nevek as $nevek) {
    if ($nevek == "Zsuzsi"){
        break;
    }
    echo $nevek . PHP_EOL;
}


//'zsuzsi' előtti és utáni neveket kiírja a 'Zsuzsi'-t átugorva.
foreach ($noi_nevek as $nevek) {
    if ($nevek == "Zsuzsi"){
        continue;
    }
    echo $nevek . PHP_EOL;
}



$osszes_nev = array_merge($noi_nevek, $ferfi_nevek); //két vagy több tömböt az array_merge-el fűzünk össze 1 tömbbé.
shuffle($osszes_nev); //összekeverem a neveket a tömbben pl most lányok-fiúk vegyesen lesznek a tömbben

foreach ($osszes_nev as $nev){
    if( in_array($nev, $ferfi_nevek)){  //ha adott név benne van a férfi tömbben akkor ugorjuk át a continue-val. 
        continue;
    }
    echo $nev . PHP_EOL; //csak a női nevek lesznek kiírva.
}

//egyszerübb módja...
foreach ($osszes_nev as $nev){
    if (!in_array($nev, $ferfi_nevek)){
        echo $nev . PHP_EOL;
    }
}

