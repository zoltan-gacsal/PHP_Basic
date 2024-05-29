<?php

//variable scope - változók láthatósága

$szam1 = 10;  // ez a globális scope-ban van

function teszt(string $koszones): void {   //void= mikor nincs return parancs a fv-en belül
    global $szam1;  //ezzel a global szóval tudom elérni a globális scope-ot és így irom felül a $szam1 változót a köv.sorban.
    $szam1 = 5; //ez a változó csak a fv-en belül létezik. miután a függvény befejezte a feladatot ez a változó törlésre kerül.
                //ez a változó a local scope-ban van.
};

teszt("Hello");
echo $szam1;


//statikus változók___________________________________________________


function test(): void {
    static $szam = 0;  // 0, 1, 2, 3
    echo $szam . PHP_EOL;
    $szam++;
}
test();
test();
test();
test();

//static nélkül a $szam változó pedig folyamatosan 0 marad.



// változók láthatósága for ciklusokon belül__________________________
for($i = 0; $i < 1; $i++){
    $szoveg = "Hello";
}
echo $szoveg; //for cikluson kivül látható lesz a változó, nincs local scope-ja



// változók láthatósága while ciklusokon belül________________________
$szamlalo = 0;

while  ($szamlalo != 1){
    $szoveg = "Hello";
    $szamlalo++;
}
echo $szoveg; //while cikluson kivül látható lesz a változó, nincs local scope-ja


// változók láthatósága if elágazásoknál______________________________

if (5 == 5){
    $szoveg = "Hello";
}
echo $szoveg; //if elágazásokon kivül látható lesz a változó, nincs local scope-ja



// változók láthatósága foreach ciklusoknál__________________________

$nevek_es_korok = [
    "Andi" => 32,
    "Ildi" => 23,
    "Zsani" => 54,
    "Viola" => 34
];

foreach($nevek_es_korok as $nev => $kor){
    echo $nev . "-" . $kor . PHP_EOL;
}

// echo "$nev $kor"; //foreach cikluson kivül is látható lesz a változó, nincs local scope-ja

