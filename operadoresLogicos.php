<?php
    //sirven para validar expresiones tales como and y or

    $resultado = 50;

    if($resultado < 60 and $resultado > 49){
        //echo "es un numero 50 valido";
    }

    $edadvalida = 25;

    if($edadvalida > 18 and $edadvalida < 26){
        //echo "la edad es valida";
    }

    $sexo = "F";

    if($sexo == "M" or $sexo =="F"){
        echo "sexo valido";
    }
?>