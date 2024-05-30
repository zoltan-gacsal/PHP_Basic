<?php

// Error hangling / Expection handling  -  Hibakezelés / Kivételkezelés

$dbHost = '127.0.0.1';
$dbUserName = 'root';
$dbPw = "";
$dbName = 'adatbazis1';


try{
    $conn = mysqli_connect($dbHost, $dbUserName, $dbPw, $dbName);
}catch(Exception $e){ //itt kapjuk el a hibát
    echo $e->getMessage() . PHP_EOL;
    throw new Exception("Sikertelen csatlakozás az adatbázishoz"); //visszadobunk egy új hibát ezzel a szöveggel, vége a script végrehajtásának
}finally {
    echo "ez itt mindenképp végrehajtódik" . PHP_EOL;
}


$result = mysqli_query($conn, "SELECT * FROM users");
while($user = mysqli_fetch_array($result)){
    echo "{$user['user_id']} \t {$user['username']} \t {$user['email']} \t {$user['password']}" . PHP_EOL;
}

mysqli_close($conn); 


