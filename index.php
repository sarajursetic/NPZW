<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP aplikacija</title>
<style>
    *{
        font-family: Arial, Helvetica, sans-serif;
        text-align:center;
        background-color: #F2F5E0;
    }

    .linkovi{
        text-decoration: none;
        color: black;
        border: solid 2px #4A7C59;
        border-radius:3px;
        background-color: #C8D5B9;
        padding: 5px;
        margin: 6px;
    }

    .linkovi:hover{
        color:green;
        border: solid 2px #162C1C;
        background-color: #4A7C59;
        padding: 7px;
        margin: 9px;
        font-size:18px;
    }

    #h1{
       
        color: #183621;
        font-size:36px;
    }

    #h2{
        color:#274F33;
        font-size:26px;
    }

    #p1{
        font-size:16px;
    }

    #slika_logo{ 
        margin-top:150px;
        width:100px;
        height:100px;
    }
    
</style>
</head>
<body>
    
<?php

$ime = "Elin Brusovic";

echo "<img src='353261.png' id='slika_logo'>";

echo "<h1 id='h1'>Pozdrav, $ime  </h1>";

$text1 = "Danas učimo PHP";

$text2 = "saznaj više na W3Schools.com";

echo "<h2 id='h2'>$text1</h2>";

echo "<p id='p1'>$text2</p>";

echo "<a href='https://www.skola-gdmp.hr' target=_blank class='linkovi'> Školska stranica </a>";

echo "<a href='https://www.w3schools.com' target=_blank class='linkovi'> W3schools </a>";

?>

</body>
</html>