<?php

$szamlalo = 0;

while( $szamlalo < 10 ){
    echo "Hello" . PHP_EOL;
    $szamlalo++;
}

// addig fut a ciklus amíg a feltétel igaz



$nevek = ["Andi", "Erika", "Ildiko", "Zsuzsi", "Aniko"];

while($szamlalo < count($nevek)){
    echo $nevek[$szamlalo] . PHP_EOL;
    $szamlalo++;
}
