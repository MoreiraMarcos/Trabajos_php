<?php

/**
 * @author Marcos
 * @copyright 2014
 * 
 * Mira esta serie: 2, 2, 4, 12, 48, ... la semilla de esta serie fue el número 2 Mira esta serie:. 3, 3, 6, 18, 72, ...
 *  la semilla de esta serie fue el número 3.
 * Cree una función que recibe dos enteros: x, y  y. Si alguno de ellos es 0 o negativo, o si son mayores que 255, la función debe devolver -1
 * La función debe devolver el elemento y de las series generadas por x.
 * Por ejemplo, si la serie recibe x = 3, y = 4, es conveniente devolver 72, porque 72 es el cuarto elemento de la serie generado cuando x = 3.
 * La función recibirá 2 enteros, y devuelve un entero.
 */

    function serie ($x, $y){
        if (($x <= 0 || $y <= 0) || ($x > 255 || $y > 255)){
            echo -1;
        }  else {
            echo $x.", ";
            for ($i=1; $i<=$y; $i++){
                $x*=$i;
                //echo $x.", ";
                echo ($i == $y)?$x." = ": $x.", ";
            } echo $x;
        }
    }   serie (3,4);

?>