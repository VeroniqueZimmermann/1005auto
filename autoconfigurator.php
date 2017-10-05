<?php
$autoKonfiguration =
    array(
    'Hersteller' => array('VW', 'BMW', 'FORD', 'Audi'),
    'Bauart' => array('SUV', 'Kombi', 'Cabrio'),
    'Motor' => array(
        'Benzin', 'Diesel',
        'Elektro', 'Hybrid' /*=> array('Trocken','Brennstoffzelle','Fusion')*/
    )
);        // Bauart = Kombi, Cabrio // numerisch indiziertes eindimensionales Array


/* echo "<pre>"; 
print_r($autoKonfiguration);
echo "</pre>";
echo "<hr>";
echo $autoKonfiguration['Motor'][1];      // der zweite Wert wird ausgegeben
echo "<hr>"; */

// zeige die erste Ebene des Arrays

foreach ($autoKonfiguration as $key => $inhalt)     // Zerlegung in Schlüssel und Inhalt // $bla as $key => $zeug - assoziatives array!
{   // und direkt dahinter die passenden Inhalte
    echo "$key -> ";
    foreach ($inhalt as $wert)                       // $bla as $key - eindimensionales
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
<form action="http://dmnb.consulting/user/ScPe/respond/respond.php" method="post">
    <?php 

    /*echo "<select id='hersteller' name='hersteller'>";

    foreach ($autoKonfiguration['Hersteller'] as $value)
        {
        echo "<option>" . $value . "</option>";
    }
    echo "</select>";
    echo "<select id='bauart' name='bauart'>";
    foreach ($autoKonfiguration['Bauart'] as $value)
        {
        echo "<option>" . $value . "</option>";
    }
    echo "</select>";
    echo "<select id='motor' name='motor'>";
    foreach ($autoKonfiguration['Motor'] as $value)
        {
        echo "<option>" . $value . "</option>";
    }
    echo "</select>";*/

    foreach($autoKonfiguration as $key => $inhalt)
    {
        echo "<select name=$key>";
        foreach($inhalt as $value)
        {
            echo "<option>".$value."</option>";
        }
        echo "</select>";
    }
    echo "<input type='submit' value='bestellen'>";
    ?>
</form>


</body>
</html>