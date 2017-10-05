<?php
$autoKonfiguration =
    array(
    'Hersteller' => array('VW', 'BMW', 'FORD', 'Audi'),
    'Bauart' => array('SUV', 'Kombi', 'Cabrio'),
    'Motor' => array(
        'Benzin', 'Diesel',
        'Elektro', 'Hybrid'
                ),
    'Getriebe' => array(
        'manuell', 'automatisch'
                        )
);
$bgFarbe = array('Hersteller' => 'lightblue',
                    'Bauart' => 'lime',
                    'Motor' => 'purple',
                    'Getriebe' => 'yellow');

$autopreis = array('VW' => 1000,
                    'BMW' => 2000,
                    'FORD' => 3000,
                    'Audi' => 4000);

$bauartpreis = array('SUV' => 1000, 
                    'Kombi' => 2000, 
                    'Cabrio' => 3000);

$motorpreis = array('Benzin' => 1000, 
                    'Diesel' => 2000, 
                    'Elektro' => 3000, 
                    'Hybrid' => 4000);

$getriebepreis = array('manuell' => 1000, 
                        'automatisch' => 2000)

?>