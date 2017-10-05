<?php
$autoKonfiguration = 
array('Hersteller','Bauart','Motor');        // Bauart = Kombi, Cabrio // numerisch indiziertes eindimensionales Array

echo "<pre>"; 
print_r($autoKonfiguration);
echo "</pre>";
echo "<hr>";
echo $autoKonfiguration[1];

?>