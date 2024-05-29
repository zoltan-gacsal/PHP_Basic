<?php

    $lucky_number = 456;
    const PI = 3.144325;
    $name = "Kovács Piroska";


    function addTitle(){
        echo "My super website";
    }

    //Heredoc string
    function addNav(){
        $nav = <<<NAV
        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>
        NAV;
        echo $nav;
    }

    function addContent(){
        $content = <<<CONTENT
        <div>
            <h1>Welcome on my website</h1>

            <h3>Here is quote from Bruce Lee:</h3>
            <p>I fear not the man who has practiced 10000 kick once, but I feat the man who has practied one kick 10000 times.</p>
        </div>
        CONTENT;
        echo $content;
    }

    function test_return(){
        return "Returned from the test_return function.";
    } 


    function addFooter(){
        global $name;
        $footer = <<<FOOTER
        <footer>
            <p>Author: $name </p>
            <p><a href="mailto:piroska@example.hu">piroska@example.hu</a></p>
        </footer>
        FOOTER;
        echo $footer;
    }


    // <?= ez a jel a html-ben a php nyitótag és az echo kombinációja 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php addTitle() ?></title>
</head>
<body>
    <?php addNav() ?>
    <?php addContent() ?>

    <h4>Some additional information</h4>
    <p>My lucky number is: <?= $lucky_number ?></p>
    <p>The value is PI is: <?= PI ?></p>

    <?php $szoveg = test_return() ?>
    <?= strtoupper($szoveg)  ?>
  
    <?php addFooter() ?>
</body>
</html>

