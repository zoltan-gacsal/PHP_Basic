<?php

// include & require - fájl bevétel/tartalmazás és bekérés

require "modules/file1.php"; //hibát ad ha fájl nem létezik, és megszakítja a végrehajtást
require_once "modules/file1.php"; //nem kéri be a fájlt ha már egyszer be lett kérve.
add(5, 6);  //ez a függvény a file1.php-ben van és itt már tudom használni miután a require behivta a fájlt.

require "modules/file2.php";

include "modules/file2.php"; //figyelmeztetést ad, de folytatja a script végrehajtását
include_once "modules/file2.php"; ///nem tartalmazz a fájlt ha már egyszer bevételezte.
multiply(3, 2); //ez a függvény a file2.php-ben van és itt már tudom használni miután az include behivta a fájlt.

echo "Hello!";
echo $number; // eredmény: 5