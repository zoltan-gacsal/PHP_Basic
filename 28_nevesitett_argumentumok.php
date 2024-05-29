<?php

declare(strict_types=1);

// named arguments - nevesített argumentumok

function udvozles(string $vez_nev, string $ker_nev, string $koszones="Szia", int $kor=0): string {
    $udv = "$koszones $vez_nev $ker_nev! Te $kor éves vagy." . PHP_EOL;
    return $udv;
}

//without named arguments
echo udvozles("Kovacs", "Erika"); 
echo udvozles("Kovacs", "Erika", "Szia", 23);

//with named arguments - megnevezett/nevesitett argumentumok
echo udvozles(vez_nev: "Kovacs", ker_nev: "Erika", kor: 23);

// az argumentumokat akár fel is cserélhetem, mert tudja mit-mihez kell rendelni.
echo udvozles(ker_nev:"Doe", kor:34, vez_nev: "John");

