<?php

// SuperGlobals

// print_r($_POST);
// print_r($_GET); // jelenleg üresek és többnyire tömböt adnak vissza

//$_POST METHOD__________________________________________________________________________
if (isset($_POST['vez_nev']) and isset($_POST['vez_nev'])){
    echo "<h3>Köszönjük a jelentkezését {$_POST['vez_nev']} {$_POST['ker_nev']}</h3>";
}else{
    echo "<p>Kérem adja meg a teljes nevét</p>";
}


//$_GET METHOD___________________________________________________________________________   
if (isset($_GET['vez_nev']) and isset($_GET['vez_nev'])){
    echo "<h3>Köszönjük a jelentkezését {$_GET['vez_nev']} {$_GET['ker_nev']}</h3>";
}else{
    echo "<p>Kérem adja meg a teljes nevét</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="vez_nev">Vezetéknév</label>
        <input type="text" name="vez_nev">

        <label for="ker_nev">Keresztnév</label>
        <input type="text" name="ker_nev">

        <button>Küldés</button>
    </form>
</body>
</html>


