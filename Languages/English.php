<?php

namespace Languages\ENG;
//itt mondjuk meg hogy ami ezalatt elhelyezkedik az ehhez a névtérhez tartozik

function hello() : void {
    echo "Hello! How are you?" . PHP_EOL;
}


function count(int $start, int $end){
    for( $i = $start ; $i < $end ; $i++ ){
        echo $i . PHP_EOL;
    }
}

// a konstansok beletartoznak a névtérbe
const lucky_num = 31;


class Translation {

}

// a sima változó nem tartozik a névtérbe...
$valtozo = 51;


