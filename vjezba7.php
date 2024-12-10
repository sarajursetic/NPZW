<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 6 PHP</title>
</head>

<body>

    <form method="POST">

        <label for="ime">Ime:</label>
        <input type="text" name="ime" ><br><br>
        
        <label for="dob">Dob:</label>
        <input type="number" name="dob" ><br><br>
        
        <input type="submit" value="Provjeri">
        
    </form>
    

    <?php

    $ime = $_POST['ime'];
    $dob = $_POST['dob'];

    if ($dob >= 18) {
        echo "$ime, možeš glasati na izborima.";
    } else {
        echo "$ime, nažalost nisi punoljetan, ne možeš glasati.";
    }

    ?>

</body>
</html>