<?php

$standardnumArray = array('A','b','C','d');

foreach($standardnumArray as $wert)
{
    echo $wert.",";
}

echo "<hr>";

foreach($standardnumArray as $index => $wert)
{
    echo "[".$index."]";        // zur Unterscheidung, was index ist und was wert
    echo $wert.",";
    echo "<br>";
}


?>