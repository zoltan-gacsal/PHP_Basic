<?php

/* 
A tömb elemek vagy adatok gyűjteménye, amelyeket összefüggő
memóriahelyeken tárolnak.
Egy tömb célja több adat együttes tárolása.
*/

//egyszerű változó deklarálás
$szam = 11;
$szoveg = "tsao";

//Tömb
$nevek = ["Don", "John", "Steve"];
$korok = [23, 53, 12, 45];

//régebbi verzió
$regi = array("Don", "John", "Steve");

//Tömb kiíratáshoz var_dump vagy a print_r függvényeket tudom használni
//Tömbök indexelése mindig 0-val kezdődik!

//print_r($nevek);
//var_dump($korok);

//Ha egy elemet akarok kiíratni használhatom az echo-t
//echo $nevek[0];  // DON
//echo $korok[1];  // 53

//új érték hozzáadása a tömbhöz, ilyenkor a következő index helyre kerül
$nevek[] = "Carlos";

//értéket az indexszám alapján tudok frissiteni
$nevek[2] = "Doe";  // Steve cserélve Doe-ra

// tömb elemeinek a számát a count segitségével kapom meg.
//echo count($nevek); // 4 

/* ha számokat tartalmaz a tömb akkor az array_sum() összeadja
a tömb elem értékeit */
//echo array_sum($korok);

/* szám tartományt szeretnék létrehozni akkor a range() lehet használni.
3 paramétert vár: (mettől, meddig, léptéke) */

$szamok = range(0, 20, 1);
//print_r( $szamok );

/* ha egy értéket keresek egy tömbben akkor az in_array()-t használhatom.
első paraméter a keresett érték, második paraméter az a tömb ahol keresem */

//var_dump(in_array("Don", $nevek)); //true


/* az array_splice segitségével beilleszthetünk tömböt egy megadott tömb elem után vagy akár 
törölhetünk is indexeket a beillesztést követően. */

$eredeti = ['a', 'b', 'c', 'd'];
$beilleszt = ["x", "y", "z"];

array_splice($eredeti, 2, 0, $beilleszt); 
           //1param: hova illessze be majd a beilleszt tömböt
           //2param: a második indextől illessze be
           //3param: azért 0 hogy ne törlödjenek a 'b' utáni értékek, ha 1 akkor jelen esetben a 'c'-t törli, ha 2 akkor a 'c' és 'd' törölve lesz
           //4param: hogy mit szeretnék beilleszteni
print_r($eredeti); // ['a', 'b', 'x', 'y', 'z', 'c', 'd']
