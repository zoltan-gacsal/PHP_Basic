<?php

// Stings - Karakterláncok

$nev = "Andi";

$szoveg1 = 'Hello $nev';  //Hello $nev
$szoveg2 = "Hello $nev";  //Hello Andi

$szoveg3 = "Hello \$nev";  //Hello $nev
$szoveg4 = "Hello {$nev}"; //Hello Andi 
$szoveg5 = "Hello ${nev}"; //Hello Andi    ->régi elavult



$szoveg = "Hello Ildiko";

echo strlen($szoveg);  //visszaadja mennyi karakterből áll egy string
echo PHP_EOL;
echo str_replace("Ildiko", "Aniko", $szoveg);  //1.param: mit keressen a szövegben
                                               //2.param: mivel stringel helyettesitse az 1.paramétert 
                                               //3.param: melyik változóban történjen mindez 



//Idézőjelek használata és escape karakter használata:

$string = 'Azt mondta: "Te vagy a legjobb."';  //1.megoldás
$string1 = "Azt mondta: \"Te vagy a legjobb.\"";  //2.megoldás
$text = 'It\'s a good sign.';


//HEREDOC_________________________________________________________

$he = "Bob";
$she = "Alice";

$heredoc = <<<TEXT
$he said "PHP is awesome".
"Of course" $she agreed."
TEXT;

echo $heredoc;


//2.example_______________________________________________________

    //escape karakterrel:
$html = "<p class=\"first\">$text</p>
         <p class=\"second\"$he</p>";

    //heredoc-al:
$html = <<<HTML
<p class="first">$text</p>
<p class="second">$he</p>
HTML;


//String operators - String operátorok___________________________

//operátorok:  .  .=  

$name = "Andi";
echo "Hello " . $name;   //Hello Andi


$koszones = "Szia ";
$koszones .= $name;
echo $koszones;     // Szia Andi




