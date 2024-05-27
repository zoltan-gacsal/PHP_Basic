<?php

//Array operators - TömbOperátorok

/*

 TömbOperátorok:     +  ==  ===  !=  <>  !==

*/

$nevek1 = ['Anita', 'Zsolt', 'Zsuzsi', 'Karesz'];
$nevek2 = ['Anita', 'Zsolt', 'Zsuzsi', 'Karesz'];

$szamok1 = [1, 2, 3, 4];
$szamok2 = [1, 2, 3, "4"];
$szamok3 = [4, 5, 6, 7];

var_dump($nevek1 == $nevek2);     //true
var_dump($szamok1 == $szamok2);   //true     tipust nem nézi
var_dump($szamok1 === $szamok2);  //false    nézi a tipusát
var_dump($szamok1 != $szamok2);   //false    tipust nem nézi
var_dump($szamok1 <> $szamok2);   //false    ugyanaz mint a !=
var_dump($szamok1 !== $szamok2);  //true     nézi a tipusát  $szamok1 nem egyenlő $szamok2-vel
var_dump($nevek1 !== $nevek2);    //false    


$gyumolcsok1 = ['a' => 'alma', 'b' => 'narancs'];
$gyumolcsok2 = ['a' => 'dinnye', 'b' => 'kivi', 'c' => 'eper'];

$gyumolcsok_union = $gyumolcsok1 + $gyumolcsok2;
print_r($gyumolcsok_union);  //$gyumolcsok_union = ['a' => 'alma', 'b' => 'narancs', 'c' => 'eper'];
//ugyanazon kulcsokon nem lehetnek értékek. Az első változó tartalmához jön a második változó tartalma
