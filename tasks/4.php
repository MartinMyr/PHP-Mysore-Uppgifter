<?php
    /*Förbättra make_tag så att man kan ange inline styles också. (Eller href för länkar)

    Exempel:
    <p style="color: hotpink;">exempeltext\</p> */


    function make_tag($tag, $message, $style){
        echo "<$tag style='color: $style;'>$message </$tag>";
    }


