<?php
include '/daten.php';

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
    <style>
    body{
        background-color: grey;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
    }
    
    div{
        position: relative;
        display: inline;
        padding: 10px;
    }

    </style>
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
    foreach ($autoKonfiguration as $key => $inhalt)
        {
        echo "<div style='background-color:  $bgFarbe[$key]'>
        <select name=$key style='background-color:  $bgFarbe[$key]'>";
        foreach ($inhalt as $value)
            {
            echo "<option value= $autopreis[$value]>" . $value . "</option>";
        }
        echo "</select>";
        echo "</div>";
    }
    echo "<input type='submit' value='bestellen'>";

    ?>
</form>


</body>
</html>