<?php


    function make_paragraph($message){
        echo "<p>".$message ."</p>";

    }


    function make_heading($tag, $message, $tagEnd){
        echo $tag , $message, $tagEnd;
    }

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



    function randomNumber($times, $min, $max){
       
        $array1 = array();
        $array1 = $random;
        for ($x = 0; $x <= $times; $x++) {
            $random = rand($min, $max);
            $array1[] = $random;
            
        } 
        
        return $array1;
    }


