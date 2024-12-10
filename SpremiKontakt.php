<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="kontenjer"></div>

    <h1>Podaci:</h1>

<?php
 $ime = $_POST["ime"];
 $prezime = $_POST["prezime"];
 $adresa = $_POST["adresa"];
 $mobitel = $_POST["mobitel"];
 $grad = $_POST["grad"];
 $spol = $_POST["spol"];
 $prijatelj = $_POST["prijatelj"];

echo "<p>$ime</p>";
echo "<p>$prezime</p>";
echo "<p>$adresa</p>";
echo "<p>$mobitel</p>";
echo "<p>$grad</p>";
echo "<p>$spol</p>";
echo "<p>$prijatelj</p>";

// spremanje   datoteke

$myfile = fopen("datoteka.txt", "a") or die("Nije moguce otvoriti datoteku");
$txt = "$ime, $prezime, $adresa, $mobitel\n";
fwrite($myfile, $txt);
fclose($myfile)
?>
</body>
</html>