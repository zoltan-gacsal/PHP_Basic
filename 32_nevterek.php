<?php

// namespaces - névterek

require "Languages/English.php";
require "Languages/Hungarian.php";

// part 1 - névtérre hivatkozva futtatjuk a függvényt itt
Languages\ENG\hello(); // Hello! How are you?
Languages\HUN\hello(); // Hello! Hogy vagy? 

// part 2 - ha csak beszeretném kérni ezt a függvényt
use function Languages\ENG\hello as en_hello;  //hello a függvény neve és kap egy aliast hogy itt tudjam használni
use function Languages\HUN\hello as hu_hello;

en_hello();
hu_hello();

// part 3 - beimportáljuk magát az egész névteret ami szintén kap egy aliast. nem hivatkozok a függvényre most.
use Languages\ENG as en;
use Languages\HUN as hu;

en\hello();
hu\hello();

en\count(1, 4);


// part 4 - konstansok bekérése

use const Languages\ENG\lucky_num as en_lucky_num;
use const Languages\HUN\lucky_num as hu_lucky_num;

echo en_lucky_num;
echo PHP_EOL;
echo hu_lucky_num;


// part 5 - osztályok bekérése, használata

use Languages\ENG\Translation as TranslationENG;
use Languages\HUN\Translation as TranslationHUN;

$eng = new TranslationENG(); //példányosítás
$hun = new TranslationHUN(); //példányosítás


// part 6 - változóknál nem kell a névteret használnom mivel a require-el bekértem a fájlt.

echo $valtozo;



