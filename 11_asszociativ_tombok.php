<?php

// Assiciativ arrays - Asszociatív tömbök

//régebbi módja
$names_and_ages = array("peter" => 30, "zsolt" => 24);

//újabb módja
$nevek_es_korok = [
    'John' => 23,
    'Peter' => 24,
    'Béla' => 25,
    'Pista' => 26
];
print_r( $nevek_es_korok );


// új érték hozzáadása a tömbhöz
$nevek_es_korok['Klaudia'] = 22;
print_r( $nevek_es_korok );

//megszámoljuk mennyi elem van a tömbben
echo count($nevek_es_korok);  // 5

//a kulcsból lesz az érték, az értékből meg a kulcsok.
$korok_es_nevek = array_flip($nevek_es_korok);
print_r($korok_es_nevek);

//igy ellenőrzöm hogy a "kulcs" létezik-e a tömbben. 1paraméter: kulcs neve, a 2.paraméter: a tömb amiben kell vizsgálni
var_dump(array_key_exists("Emese", $nevek_es_korok)); //false

//tartalmazza-e az értéket a tömb. 1paraméter: az érték, 2paraméter a tömb amiben vizsgálom
var_dump(in_array(24, $nevek_es_korok));

//kiíratom a kulcshoz rendelt értéket
echo $nevek_es_korok['Peter'];


