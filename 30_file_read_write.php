<?php

// József Attila - Megfáradt ember (Novdoc string)
$vers = <<<'VERS'
A földeken néhány komoly paraszt
hazafele indul hallgatag.
Egymás mellett fekszünk: a folyó meg én,
gyenge füvek alusznak a szívem alatt.
 
A folyó csöndes, nagy nyugalmat görget,
harmattá vált bennem a gond és teher;
se férfi, se gyerek, se magyar, se testvér,
csak megfáradt ember, aki itt hever.
 
A békességet szétosztja az este,
meleg kenyeréből egy karaj vagyok,
pihen most az ég is, a nyugodt Marosra
s homlokomra kiülnek a csillagok.
VERS;

echo $vers;
$szoveg = "Hello! Hogy vagy?";

//write______________________________________________________________

$file =fopen("vers.txt", "w"); //1.argumentum: milyen fájlba szeretném ezt kiírni
                               //2.argumentum: milyen módban szeretném megnyitni  "w"-írás , "a"-hozzáfűzés
fwrite($file, $vers);          //első argumentumba ird bele a második argumentum tartalmát 
fclose($file);                 //le kell zárni a megnyitott fájlokat! 


//read______________________________________________________________

$file1 = fopen("vers.txt", "r") or die("can't open file");
echo fread($file1, filesize("vers.txt")); //a teljes fájlt beolvassa

// echo fgets($file1);  //egy sort olvas be a fájlból

//soronként az egész fájlt kiolvassa ciklus segítségével
while(!feof($file1)){                       // feof - file end of file  //amíg nincs vége a fájlnak addig olvasd be a sort
    $line = fgets($file1);
    echo mb_strtoupper($line, 'UTF-8');
};

fclose($file1);


