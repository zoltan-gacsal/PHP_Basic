<?php

/*
First class functions - Első osztályú függvények:
A PHP függvények változókba menthetők.
Argumentumként adhatók át más függvényeknek

Arrow functions - Nyíl függvények
*/

$szamok = [1, 2, 3, 4, 5, 6];

//function definition____________________________________________________
function negyzet1($x){
    return $x * $x;
}

$szamok_negyzet1 = array_map('negyzet1', $szamok); //függvényt string-ként tudok átadni az első paraméterben ezesetben.
print_r($szamok_negyzet1);



//anonymous function - function expression_______________________________
$negyzet2 = function($y){
    return $y * $y;
};

$szamok_negyzet2 = array_map($negyzet2, $szamok);
print_r($szamok_negyzet2);



//arrow function_________________________________________________________

$szamok_negyzet3 = array_map(fn($x) => $x * $x, $szamok);
print_r($szamok_negyzet3);
//nyil függvénynél automatikusan van return és visszaad valamit.



