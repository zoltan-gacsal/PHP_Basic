<?php

//Növelés, Csökkentés operátorok - Increment/Decrement operators

// operátorok:  ++  --

$szam = 10;

// post increment - utónövelés

// echo $szam++ . PHP_EOL; // value= 10  (átpasszolja az echo-nak a jelenlegi értéket és csak azután növeli eggyel)
// echo $szam . PHP_EOL;   // value= 11  (most már 11 a változó értéke)


// post decrement - utócsökkentés

// echo $szam-- . PHP_EOL;  // value= 10 (átpasszolja az echo-nak a jelenlegi értéket és csak azután csökkenti eggyel)
// echo $szam . PHP_EOL;   // value= 9  (most már 9 a változó értéke)


// pre increment - előnövelés

// echo ++$szam . PHP_EOL; // value= 11 (megemeli a változó értékét eggyel és azután adja át az echo-nak kiíratásra)


// pre decrement - előcsökkentés

// echo --$szam . PHP_EOL;  // value= 9 (csökkenti a változó értékét eggyel és azután adja át az echo-nak kiíratásra)

