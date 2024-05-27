<?php

// Logikai operátorok - Logical (Relational) operators

// operátorok:  and  or  xor  &&  ||  !

var_dump(5 == 5);  //true

var_dump(5 == 5 && 5 > 4 and 5 != 6);  // true értéket kapunk
var_dump(5 == 5 and 5 < 3);  // false értéket kapunk
var_dump(5 != 5 and 5 <= 4);  // false érétéket kapunk

var_dump(5 == 5 or 5 < 3); // true értéket kapunk

/* and-nél minden egyes vizsgálatnak true-nak kell lennie 
akkor kapunk vissza True-t,
minden más esebne False értéket kapunk vissza */

/* or-nál elég ha az egyik kifejezés igaz akkor már True-val 
tér vissza az érték */

var_dump(true and false); // false
var_dump(true and true); // true
var_dump(false and false);// false

var_dump(true or true); // true
var_dump(true or false); // true
var_dump(false or false); // false

var_dump(!true); // false
var_dump(!false); // true

/* a különbség a két tipusú operátorok között pl: && and, hogy 
Az and operátor magasabb prioritású, mint a && operátor. */