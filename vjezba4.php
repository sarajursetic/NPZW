<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vježba 4</title>
</head>
<body>
    <?php
    
    echo "<h1> Vježba 4 </h1>";

    $a = 10;
    $b = 3;

    /*Operator negacije (uskličnik)*/

    if ($a != $b){
        echo "<p> $a je različit od $b </p>";
    }

    /*Logičko I, AND operator*/

    $c = 6;
    $d = 8;

    if ($c == 6 and $d == 8){
        echo"<p> Oba uvjeta su TRUE! </p>";
    }
    
      /*Logičko ILI, OR operator*/

      $e = 12;
      $f = 17;
      $i = 41;
  
      if ($e == 12 or $f == 20 or $i == 41){
          echo"<p> Bar jedan uvjet je TRUE! </p>";
      }

      /*Ekskluzivno ILI, XOR operator*/

      $g = 21;
      $h = 31;
  
      if ($g == 21 xor $h == 20){
          echo"<p> Samo jedan uvjet je TRUE! </p>";
      }
      
    ?>
</body>
</html>