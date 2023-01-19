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

    // Question-4.php need to calculate one value 'answer' out of multiple checkboxes name='answer1'/'answer2'... 

    /*$q4 = $_SESSION['question-4'];
    $pattern = "/answer[1-11]/";
    $val = $q4['$pattern'];
    print_r($val);
    
    echo preg_match_all($pattern, $val);*/

// DEVONLY: gib die aktuelle $_SESSION in die Seite aus. prettyPrint() ist nur zum testen da.
// prettyPrint($_SESSION);

?>