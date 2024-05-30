<?php

    //MySQLi Extension

    $dbHost = '127.0.0.1';
    $dbUserName = 'root';
    $dbPw = "";
    $dbName = 'adatbazis1';

    $conn = mysqli_connect($dbHost, $dbUserName, $dbPw, $dbName);

    //create the users table - új adatbázis tábla készítése____________________________
    $statement = "CREATE TABLE IF NOT EXISTS users (
        user_id int PRIMARY KEY AUTO_INCREMENT,
        username varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        password varchar(255) NOT NULL
        );";

    $stmt_prepare = mysqli_prepare($conn, $statement);  //előkészítjók a parancsot a mysqli_prepare-el.
    mysqli_stmt_execute($stmt_prepare);

    //insert data into users table - adat hozzáadása a users táblához___________________
    $statement = "INSERT INTO users (username, email, password) VALUES
    ('Reka', 'reka@gmail.com', 'reka1234')";

    $stmt_prepare = mysqli_prepare($conn, $statement);
    mysqli_stmt_execute($stmt_prepare);


    //adatbázisból lekérés_______________________________________________________________
    //1.megoldás
    $result = mysqli_query($conn, "SELECT * FROM users");
    $users = mysqli_fetch_all($result); //asszociativ tömbként adja vissza az eredményt
    print_r($users);
    
    //2.megoldás
    $result = mysqli_query($conn, "SELECT * FROM users");
    while($user = mysqli_fetch_array($result)){
        echo "{$user['user_id']} \t {$user['username']} \t {$user['email']} \t {$user['password']}" . PHP_EOL;
    }

    // Closing the connection - a kapcsolat lezárása_____________________________________
    mysqli_close($conn);

?>