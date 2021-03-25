<?php
    //estructura de control iterativa que usa llaves o asociaciones de datos como indice
    $arregloColores = array(
        "coche" => "verde",
        "moto" => "roja",
        "avion" => "gris"
    );

    $array = array(1,2,3,4,5);

    foreach ($array as $key) {
        echo $key;
        echo "<br>";
    }
?>