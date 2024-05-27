<?php

$szamlalo = 0;

//egyszer lefut a parancs és kiírja, hogy "hello"
do {
    echo "hello " . PHP_EOL;
} while (false);


//amíg a feltétel teljesül (10), addig fut a ciklus
do {
    echo "hello " . PHP_EOL;
    $szamlalo++;
} while ($szamlalo < 10);


