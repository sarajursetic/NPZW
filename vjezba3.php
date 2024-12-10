<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vježba 3</title>
</head>
<body>

    <?php
    echo "<h1>Vježba 3</h1>";

    $student = "Katarina";
    $grade = 5;

    if ($grade === 5) {
        echo "Bravo $student! Ocjena je $grade";
    } elseif ($grade === 4) {
        echo "Bravo $student! Ocjena je $grade";
    } elseif ($grade === 3) {
        echo "Zlatna sredina $student! Ocjena je $grade";
    } elseif ($grade === 2) {
        echo "Jao $student! Ocjena je $grade";
    } elseif ($grade === 1) {
        echo "Jao $student! Uči više. Ocjena je $grade";
    } else {
        echo "Unio si krivu ocjenu.";
    }

    ?>

</body>
</html> 