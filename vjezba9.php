<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vježba 9</title>
</head>
<body>
    <h1>PHP petlje</h1>

<?php

    for ($i = 0; $i <= 10; $i++)
    {
        echo $i ." ";
    }
    echo nl2br("\n");

$b = 0;

    while($b <= 10)
    {
        echo $b. " ";
        $b++;
    }
    echo nl2br("\n");

$e = 0;

    do {
    echo $e . " ";
    $e++;
    } while ($e <= 10);

?>

<h2>Tablica</h2>

<table border="1" cellpadding="3">
    <?php
    for ($i = 1; $i <= 10; $i++)
    {
        echo "<tr>";
        for($j = 1; $j <= 10; $j++)
        {
            echo "<td>";
            echo $i*$j;
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>