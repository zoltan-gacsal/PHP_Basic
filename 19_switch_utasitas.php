<?php

// switch statement - switch utasitas | parancs


$kedvenc_szin = "piros";

switch ($kedvenc_szin) {
    case 'zöld':
        echo "A zöld a kedvenc szined." . PHP_EOL;
        break;

    case 'piros':
        echo "A piros a kedvenc szined." . PHP_EOL;
        break;

    case 'kék':
        echo "A kék a kedvenc szined." . PHP_EOL;

    default:
        echo "se a zöld, kék és piros nem tartozik a kedvenc szined közé" . PHP_EOL;
        break;
}




$szamok = [11, 23, 34, 54, 65, 78];
$index = array_rand($szamok);
$nyero = $szamok[$index];

switch ($nyero) {
    case 11:
        echo "A 11-es szam nyert" . PHP_EOL;
        break;
    case 23:
        echo "A 23-as szam nyert" . PHP_EOL;
        break;
    case 34:
        echo "A 34-es szam nyert" . PHP_EOL;
        break;
    case 54:
        echo "A 54-es szam nyert" . PHP_EOL;
        break;
    case 65:
        echo "A 65-ös szam nyert" . PHP_EOL;
        break;
    default:
        echo "Egyik szám sem nyert." . PHP_EOL;
        break;
}
