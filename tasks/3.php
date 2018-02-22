<?php
    /*Nu har vi två funktioner som vi kan använda för att skapa HTML-paragrafer och headings. 
    Men det blir väldigt många funktioner om vi ska ha en funktion för varje möjligt HTML-element.
    Vi behöver en funktion som kan göra flera sorters element.
    Skriv en funktion make_tag som kan göra alla sorters HTML-element.*/

 function make_tag($tag, $message, $style){
    echo "<$tag>$message </$tag>";
}