<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vježba 2</title>
    <style>
        *{
            text-align: center;
        }
    </style>
</head>
<body>

    <?php
    echo  "<h1>Vježba 2</h1>";
    
    $username = "Ivo";

    $password = "Ivo12";

    if ($password == "Ivo123") {
        echo "<h2>Pristup dozvoljen</h2>";
        echo "<p> Dobro došao $username ! </p>";
    } else {
        echo "<h2>Netočna lozinka </h2>";
        echo "<h2>Pristup odbijen</h2>";
    }

    ?>

</body>
</html>