<?php
    /*Skriv en funktion som gör om en tvådimensionell array till en HTML-tabell.*/


        $array1 = array(
            array("Martin", 24),
            array("Åke", 50),
            array("Kajsa", 22)
        );

    function write2Dim($array1){
    
        foreach ($array1 as $val) {
            echo "<li>". $val[0] .": ".$val[1] . "år" . "</li>";
        }
        echo "</ul>";
    }

   