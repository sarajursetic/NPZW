<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP aplikacija</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .kontenjer {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        input[type="textarea"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .spol {
            margin: 10px 0;
        }

        .checkbox-group {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="kontenjer">
        <form action="SpremiKontakt.php" method="POST">
            <label for="ime">Ime:</label>
            <input type="text" id="ime" name="ime">

            <label for="prezime">Prezime:</label>
            <input type="text" id="prezime" name="prezime">

            <label for="adresa">Adresa:</label>
            <textarea rows="4" cols="50" name="adresa">
            </textarea>
<br>
            <label for="mobitel">Mobitel:</label>
            <input type="text" id="mobitel" name="mobitel">
<br>
            <label for="grad">Grad:</label>
            <select name="grad" id="grad">
                <option value="Zadar">Zadar</option>
                <option value="Sisak">Sisak</option>
                <option value="Zagreb">Zagreb</option>
            </select>
            <br>

            <!-- Spol -->
            <div class="spol">
                <label for="spol" >Spol:</label>
                <label for="muski">Muški</label>
                <input type="radio" id="muski" name="spol" value="muski">
                <label for="zenski">Ženski</label>
                <input type="radio" id="zenski" name="spol" value="zenski">
            </div>

            <!-- Prijatelj -->
            <div class="checkbox-group">
                <label for="prijatelj">Označite ako je prijatelj:</label>
                <input type="checkbox" id="prijatelj" name="prijatelj" value="da">
            </div>
 <br>
            <button type="submit">Pošaljite</button>
            <br><br>
            <button type="reset">Odustani</button>
        </form>
    </div>
</body>
</html>
