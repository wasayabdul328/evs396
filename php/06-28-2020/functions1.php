<?php


function getTable($table){

    for ($a = 1; $a <= 25; $a += 2) {
        echo "$table x $a = " . ($table * $a) . " <br>";
    }
}


getTable(15);
getTable(12);

// function overloading =>  support(x)
