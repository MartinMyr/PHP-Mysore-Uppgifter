<?php
    //Skriv en funktion med namnet capitalize som gör om ett användarnamn till stora bokstäver.
    $userName = "martin";

    function capitalize($userName){

        $userName = strtoupper($userName);
        echo $userName;
    }