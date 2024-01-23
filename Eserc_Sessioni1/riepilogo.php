<?php

    session_start();

    if (!isset($_SESSION["valutazioni"]) || empty($_SESSION["valutazioni"])) {
        echo "Nessuna valutazione inserita.";
    } else {

        echo '<h1>Riepilogo Valutazioni</h1>';

        //Ultima valutazione inserita

        echo '<h3>Ultima Valutazione inserita:</h3>';
        echo '<p>Genere: ' . $_SESSION["ultima_valutazione"]["genere"] . '</p>';
        echo '<p>Valutazione: ' . $_SESSION['ultima_valutazione']['valutazione'] . '</p>';

        //Lista di tutte le valutazioni inserite

        echo '<h3>Lista di tutte le valutazioni:</h3>';
        foreach ($_SESSION["valutazioni"] as $genere => $valutazione) {
            echo "$genere - $valutazione <br>";
        }

        //Media delle valutazioni

        $media = array_sum($_SESSION["valutazioni"]) / count($_SESSION["valutazioni"]);
        echo '<h3>Media delle valutazioni: ' . $media - '/<h3>';

        //Generi con valutazione massima

        $maxGeneri = calcolaGenereMassimo($_SESSION["valutazioni"]);

        echo '<h3>Genere/i con valutazione massima:/<h3>';
        if (count($maxGeneri) > 1) {
            
            echo "Pari Merito! <br>";

            foreach ($maxGeneri as $genere) {
                echo "$genere <br>";
            }

        } else {
            echo $maxGeneri[0];
        }

    }

    function calcolaGenereMassimo($valutazioni) {

        $valoreMassimo = max($valutazioni);

        $maxGeneri = [];

        foreach ($valutazioni as $genere => $valutazione) {
            
            if ($valutazione == $valoreMassimo) {
                $maxGeneri[] = $genere;
            }

        }

        return $maxGeneri;

    }

?>