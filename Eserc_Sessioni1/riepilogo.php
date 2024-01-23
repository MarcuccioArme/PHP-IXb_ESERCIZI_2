<?php

    session_start();

    if (!isset($_SESSION["valutazioni"]) || empty($_SESSION["valutazioni"])) {

        echo "Nessuna valutazione inserita.";

    } else {

        echo '<h1>Riepilogo valutazioni</h1>';

        //Ultima valutazione inserita

        echo '<h3>Ultima valutazione inserita:</h3>';
        echo '<p>Genere: <b>' . $_SESSION["ultima_valutazione"]["genere"] . '</b> <br>';
        echo 'Valutazione: <b>' . $_SESSION['ultima_valutazione']['valutazione'] . '</b> </p>';

        //Lista di tutte le valutazioni inserite

        echo '<h3>Lista di tutte le valutazioni:</h3>';

        foreach ($_SESSION["valutazioni"] as $genere => $valutazione) {
            echo "$genere - <b>$valutazione</b> <br>";
        }

        //Media delle valutazioni

        $media = array_sum($_SESSION["valutazioni"]) / count($_SESSION["valutazioni"]);

        echo '<h3>Media delle valutazioni:</h3>';
        echo $media;

        //Generi con valutazione massima

        echo '<h3>Genere/i con valutazione massima:</h3>';

        $max_valutazione = max($_SESSION["valutazioni"]);
        $maxGeneri = array_keys($_SESSION["valutazioni"], $max_valutazione);

        sort($maxGeneri);

        if (count($maxGeneri) > 1) {
            
            foreach ($maxGeneri as $genere) {
                echo "$genere <br>";
            }

            echo "<br><b>Pari Merito!</b>";

        } else {
            echo $maxGeneri[0];
        }

    }

?>