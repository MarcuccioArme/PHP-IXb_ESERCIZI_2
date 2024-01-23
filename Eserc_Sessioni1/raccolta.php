<?php

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $genere = $_POST["genere_letterario"];
        $valutazione = intval($_POST["valutazione"]);

        $_SESSION["ultima_valutazione"] = [

            "genere" => $genere,
            "valutazione" => $valutazione

        ];

        if (!isset($_SESSION["valutazioni"][$genere]) || $valutazione > $_SESSION["valutazioni"][$genere]) {
            $_SESSION["valutazioni"][$genere] = $valutazione;
        }

        echo '<h1>Raccolta Dati</h1>';
        echo '<button onclick="location.href=\'valutazione.php\'">INSERISCI UNA NUOVA VALUTAZIONE</button>';
        echo '<button onclick="location.href=\'riepilogo.php\'">VAI ALLA PAGINA DI RIEPILOGO</button>';

    }

?>