<?php

//variables - változók

/*
$szam = 5;
echo $szam . PHP_EOL;

$szam = "nyolc"; //változhat benne az eltárolt érték és akár a típus is.
echo $szam . PHP_EOL; 
*/


//konstans állandók

define("KERESZT_NEV", "Zsuzsi"); // 1.param: a konstans neve mindig nagybetűvel kell írni , 2.param: az értéke
define("NEME", "Férfi");
define("NEMZETISEG", "Magyar");

echo KERESZT_NEV . PHP_EOL;
echo NEME . PHP_EOL;
echo NEMZETISEG . PHP_EOL;


//másik módja...

const SZULETESI_ORSZAG = "Hu";

echo SZULETESI_ORSZAG . PHP_EOL;