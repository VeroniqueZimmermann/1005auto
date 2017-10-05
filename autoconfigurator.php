<?php
$autoKonfiguration = 
array('Hersteller'=> array('VW', 'BMW', 'FORD','Audi'),
        'Bauart' => array('SUV', 'Kombi', 'Cabrio'), 
        'Motor' => array('Benzin', 'Diesel', 
                        'Elektro' /*=> array('Trocken','Brennstoffzelle','Fusion')*/
                    )
    );        // Bauart = Kombi, Cabrio // numerisch indiziertes eindimensionales Array


/* echo "<pre>"; 
print_r($autoKonfiguration);
echo "</pre>";
echo "<hr>";
echo $autoKonfiguration['Motor'][1];      // der zweite Wert wird ausgegeben
echo "<hr>"; */

// zeige die erste Ebene des Arrays

foreach($autoKonfiguration as $key => $inhalt)     // Zerlegung in Schlüssel und Inhalt // $bla as $key => $zeug - assoziatives array!
{   // und direkt dahinter die passenden Inhalte
    echo "$key -> ";
    foreach($inhalt as $wert)                       // $bla as $key - eindimensionales
    {
        echo "$wert,";                              // wenn teils weitere Werte vorhanden, dann so, falls $wert noch weitere Informationen, dann andere Schleife
    }
        echo "<br>";
}
echo "<hr>"

?>

<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <title>Autokonfiguration</title>
</head>
<body>
<form action="" method="get">
    <select id="hersteller" name="hersteller">
        <?php
            foreach($autoKonfiguration['Hersteller'] as $value)
            { 
                echo "<option>".$value."</option>";
            }
        ?>
    </select>
    <select>
        <?php
            foreach($autoKonfiguration['Bauart'] as $value)
            { 
                echo "<option>".$value."</option>";
            }
        ?>
    </select>
    <select>
        <?php
            foreach($autoKonfiguration['Motor'] as $value)
            { 
                echo "<option>".$value."</option>";
            }
        ?>
    </select>




</form>


</body>


</html>