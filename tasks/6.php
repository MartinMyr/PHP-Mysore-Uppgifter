<?php
    /*Skriv en funktion som returnerar en array med slumptal.
    Använd rand för att göra slumptal.
    Hur många argument behöver funktionen?*/

    function randomNumber($times, $min, $max){
       
        $array1 = array();
        $array1 = $random;
        for ($x = 0; $x <= $times; $x++) {
            $random = rand($min, $max);
            $array1[] = $random;
            
        } 
        
        return $array1;
    }