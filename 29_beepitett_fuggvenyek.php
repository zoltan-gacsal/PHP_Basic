<?php

// példák beépitett (globális) függvényekre

// isset és empty függvény____________________________________________

$a = 5;
var_dump(isset($a)); //megnézi, hogy a változó létezik-e és az értéke nem null  (true)
var_dump(empty($a)); //megnézi, hogy a változó nincs-e beállítva avagy üres szerű értéket tartalmaz  (false)

$b = "";
var_dump(isset($b)); // (true)
var_dump(empty($b)); // (true)

$c = [];
var_dump(isset($c)); // (true)
var_dump(empty($c)); // (true)

$d = null;
var_dump(isset($d)); // (false)
var_dump(empty($d)); // (true)

$e = 0;
var_dump(isset($e)); // (true)
var_dump(empty($e)); // (true)

$f = false;
var_dump(isset($f)); // (true)
var_dump(empty($f)); // (true)

// explode függvény___________________________________________________
//explode(): kap egy stringet és tömböt fog belőle készíteni

$welcome_text = "Hello, world";

$str_to_array = explode(" ", $welcome_text);    //1.param: hol szeletelje fel a stringet, mi mentén
                                                //2.param: az átadott string, változó
print_r($str_to_array);



// implode függvény___________________________________________________
// implode(): egy tömböt string-re konvertál

$array_to_str = implode("-", $str_to_array);    //1.param: mivel válassza el a szavakat egymástól
                                                //2.param: az átadott tömb változó
print_r($array_to_str);


// strlen függvény____________________________________________________
// strlen(): visszaadja mennyi karakter van egy stringben whitespace-kel együtt
// az ékezeteket 2 karakternek számolja
echo strlen($welcome_text);


// count függvény_____________________________________________________
// count(): mennyi darab eleme van egy tömbnek
echo count([123, 432, 543, 522]);


// json_encode függvény________________________________________________
// json_encode(): tömböt kell megadni neki, és json stringé fogja konvertálni a tömböt

$nevek_es_korok = [
    "Andi" => 32,
    "Ildi" => 23,
    "Zsani" => 54,
    "Viola" => 34
];

$array_to_json_str = json_encode($nevek_es_korok);
echo $array_to_json_str; // {"Andi":32,"Ildi":23,"Zsani":54,"Viola":34}
echo gettype($array_to_json_str); // visszaadja az objektumok tipusát  


// json_decode függvény________________________________________________
// json_decode(): visszaállitja a json stringet tömbbé/asszociativ tömbbé

$json_str_to_array = json_decode($array_to_json_str, associative: true);
print_r($json_str_to_array);
echo gettype($json_str_to_array);





