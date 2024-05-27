<?php

// match statement - match utasitás | parancs (kondíciók)

/*
switch vs match
    switch (== loose comparison - laza összehasonlitás)
    match (=== strict comparison - szigorú összehasonlitás)
*/

$fizetesi_kod = 0;
//$fizetesi_kod = '101' akkor a switch lefuttatja mig a match a default ágra ugrik a tipus összehasonlitás miatt.

switch($fizetesi_kod){
    case 0:
        echo "Kérem válassza ki a fizetés módját.";
        break;
    case 101: //Visa
    case 102: //Mastercard
        echo "Ön a bankkártyás fizetési módot választotta.";
        break;
    case 103:
        echo "Ön a PayPal fizetési módot válaszottta.";
        break;
    case 104:
        echo "Ön a Stripe fizetési módot válaszotta.";
        break;
    default:
        echo "Nem választható fizetési mód.";
}



$fiz_mod = match ($fizetesi_kod){
    0 => "Kérem válassza ki a fizetés módját.",
    101, 102 => "Ön a bankkártyás fizetési módot választotta.",
    103 => "Ön a PayPal fizetési módot válaszottta.",
    104 => "Ön a Stripe fizetési módot válaszotta.",
    default => "Nem választható fizetési mód."  //kötelező a default ág a match-ben. 
};

echo $fiz_mod;

