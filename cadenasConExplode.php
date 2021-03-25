<?php
    $var = "pedro jimenez lopez";
    $fecha = "01-05-2017";

    //es una funcion que convierte un sttring a un arreglo dependiendo la costruccion pedida

    $datos = explode(" ", $var);

    $f = explode("-", $fecha);

    echo "el año de la fecha es ".$f[1];
    //$paterno = $datos[1];

    //var_dump($datos);

    //echo $paterno = $datos[1];

    /* echo "<pre>";
    print_r($datos);
    echo "</pre>"; */


?>