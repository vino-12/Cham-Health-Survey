<?php

session_start();

// Hilfswerkzeuge laden
include 'tools.php';

//gehört auf jede Frageseite
if (isset($_POST["lastPageID"])) {

    // Hole den Namen der letzten Seite aus $_POST "lastPageID".


    // Speichere alle Daten des letzten Posts mit den Namen $lastPageID in der Session
    $lastPageID = $_POST["lastPageID"];

    $_SESSION[$lastPageID] = $_POST;

}

// DEVONLY: gib die aktuelle $_SESSION in die Seite aus. prettyPrint() ist nur zum testen da.
// prettyPrint($_SESSION);

?>