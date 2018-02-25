<?php
/*Förbättra funktionen så att den lägger till en rad sist i tabellen, 
med summan av alla siffror i varje kolumn. Du kan anta att arrayen innehåller tal. */

$array1 = array(
    array("Martin", 24),
    array("Åke", 50),
    array("Kajsa", 22)
);

function write2DimSum($array1){

foreach ($array1 as $val) {
    echo "<li>". $val[0] .": ".$val[1] . "år" . "</li>";
    $sum += $val[1];
}

echo "<li> Total ålder : ".$sum . "</li>". "</ul>";
}

