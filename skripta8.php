<?php
    $ime = $_POST['ime'];
    $dob = $_POST['dob'];
if(isset($ime) && isset($dob)){



    if ($dob >= 18) {
        echo "$ime, možeš glasati na izborima.";
    } else {
        echo "$ime, nažalost nisi punoljetan, ne možeš glasati.";
    }
}

else{
    echo "<h1>Molimo Vas ispunite formu.</h1>";
}
    ?>