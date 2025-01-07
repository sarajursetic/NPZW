
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $razred_smjer = $_POST['razred_smjer'];
    $discord = $_POST['discord'];
    $iskustvo = $_POST['iskustvo'];


    $podaci = "Ime: $ime\nPrezime: $prezime\nRazred i smjer: $razred_smjer\nDiscord: $discord\nIskustvo u Valorantu: $iskustvo\n\n";


    $file = 'dokument.txt';
    file_put_contents($file, $podaci, FILE_APPEND); 

    header("Location: " . $_SERVER['PHP_SELF']); 
    exit;

}
?>
    <header>
        <a href="https://csel-gg.com/"><img src="logo.png" id="logo-slika" alt="Logo"></a>
        <h1>PRIJAVI SE</h1>
    </header>
    <section class="sekcija1">
        <h2>Želiš biti dio našeg tima?</h2>
        <p>Ispuni formu i kvalificiraj se u tim!</p>
    </section>

    <main>
        <form action="" method="POST">
            <div class="forma">
                <p>Ime</p>
                <input type="text" name="ime" value="" required>

                <br><br>

                <p>Prezime</p>
                <input type="text" name="prezime" value="" required>

                <br><br>

                <p>Razred i smjer</p>
                <input type="text" name="razred_smjer" value="" required>

                <br><br>

                <p>Discord korisničko ime</p>
                <input type="text" name="discord" value="" required>

                <br><br>

                <p>Iskustvo igranja Valoranta?</p>
                <br>
                <label for="da">Da</label>
                <input type="radio" id="da" name="iskustvo" value="da" required>
                <br>
                <label for="ne">Ne</label>
                <input type="radio" id="ne" name="iskustvo" value="ne" required>

                <br><br>

                <input type="submit" id="Posalji" name="submit" value="Pošalji">
            </div>
        </form>
    </main>
</body>
</html>
