<?php

//Összehasonlítió operátorok - Comparison operators

// operátorok:  ==  ===  !=  <>  !==  >  <  <=  >=  <=>

var_dump(5 == 5) . PHP_EOL;  //összehasonlit két értéket
var_dump(5 == "5") . PHP_EOL;  
var_dump(5 === "5") . PHP_EOL;  // összehasonlít két értéket és a tipusaikat is
var_dump(5 !== "5") . PHP_EOL;  //nem egyenlő, értéket és tipust is összehasonlitja
var_dump(5 != 5) . PHP_EOL;  //nem egyenlő
var_dump(5 <> 5) . PHP_EOL;  //nem egyenlő szintén
var_dump(5 > 5) . PHP_EOL;
var_dump(5 < 5) . PHP_EOL;
var_dump(5 >= 5) . PHP_EOL;
var_dump(5 <= 5) . PHP_EOL;
var_dump(4 <=> 5) . PHP_EOL;  