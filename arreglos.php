<?php

    //es un tipo de dato que puede contener n datos a partir de un almacenamiento por indice
    $arreglo = array();
    $arreglo[0] = "Juan";
    $arreglo[1] = 10;
    $arreglo[3] = "facultad";
    $arreglo[2] = "autodidacta";

    //se puede llenar por posicion o desde el inicio

    $arreglo2 = array('jose',5,6,7,8,9,10);

    //var_dump($arreglo);

    //echo $arreglo[1] + 5;

    //echo count($arreglo);

    for ($i=0; $i < count($arreglo2); $i++) { 
        echo $arreglo2[$i];
        echo "<br>";

        if ($arreglo2[$i] == "autodidacta") {
            echo "felicidades encontraste el dato";
            echo "<br>";
        }
    }
?>