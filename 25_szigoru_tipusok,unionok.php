<?php

//Tipusos argumentumok és visszaadott típusok, szigorú típus megfeleltetés függvényeknél

declare(strict_types=1);
//ez egy kapcsolo ami kényszeríti,hogy vegye szigoruan a típusokat

function osszeadas(int|float $szam1, int|float $szam2): int|float {  
    return $szam1 + $szam2;
}

//int = integer
//float = lebegőpontos szám

echo osszeadas(5.5, "7");
// nem adja össze mert int-nek vagy float-nak kell lennie az átadott paraméternek! 

