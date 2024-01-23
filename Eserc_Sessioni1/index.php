<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valutazione Generi Letterari</title>
</head>
<body>

    <h1>Valutazione Generi Letterari</h1>
    <h2>Inserisci la tua valutazione</h2>

    <form action="raccolta.php" method="post">

        Genere Letterario: <input type="text" name="genere_letterario" placeholder="Es: Fantascienza" required> <br><br>
        Valutazione (1 - 10) <input type="number" name="valutazione" min="1" max="10" required> <br><br>

        <input type="submit" value="INSERISCI VALUTAZIONE">

    </form>
    
</body>
</html>