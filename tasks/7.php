<?php
/*    Skriv en funktion som gör om en array till en lista i HTML. Använd funktionen make_tag.

    Exempel:
    make_list( [1, 2] ) // "<ul> <li>1</li> <li>2</li> </ul>" */

    function make_tag($tag, $message, $style){
        echo "<$tag style='color: $style;'>$message </$tag>";


    }

    $array = array("Martin", "Yeppe", "Patte");


    function make_list($array){
        echo "<ul>";
        foreach ($array as $val) {
            make_tag("li", $val, "blue" );
        }
        echo "</ul>";
    }
