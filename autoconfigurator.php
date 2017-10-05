<?php
$autoKonfiguration = 
array('Hersteller','Bauart' => array('SUV','Kombi'),'Motor' => array('Benzin','Diesel','Elektro','Hybrid'));        // Bauart = Kombi, Cabrio // numerisch indiziertes eindimensionales Array

echo "<pre>"; 
print_r($autoKonfiguration);
echo "</pre>";
echo "<hr>";
echo $autoKonfiguration['Motor']['1'];      // der zweite Wert wird ausgegeben

?>