<?php
    function miFuncion(){
        //mostrar un nombre
        $r = array(1);
        //echo 'Este es un nombre';
        return $r;
    }

    //echo miFuncion();

    function miFuncion2($valorA, $valorB, $opcion){
        switch ($opcion) {
            case 'suma':
                return $valorA + $valorB;
                break;
            case 'resta':
                return $valorA - $valorB;
                break;    
            case 'multiplicacion':
                return $valorA * $valorB;
                break;
            case 'division':
                return $valorA / $valorB;
                break;        
            default:
                # code...
                break;
        }
    }

    echo miFuncion2(5,10,'multiplicacion');
?>