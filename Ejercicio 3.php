<?php

/**
 * @author Marcos
 * @copyright 2014
 * 
 * Mira esta serie: 60, 30, 20, 15, 12 ... la semilla de esta serie fue el número 60.
 * Cree una función que recibe dos enteros: x, y y. Si alguno de ellos es 0 o negativo, o si son mayores que 255, la función debe devolver -1.
 * La función debe devolver el elemento y de las series generadas por x.
 * Por ejemplo: Si la función recibe x = 60, y = 3, devolverá 20, porque el 20 es el elemento 3 º en la serie genera cuando x = 60.
 * La función recibirá 2 enteros, devuelve un valor de punto flotante.
 *
 */

    function serie ($x, $y){
        if (($x <= 0 || $y <= 0) || ($x > 255 || $y > 255)){
            echo -1;
        }  else {
          
          $aux=0;
          for ($i=1; $i<=$y; $i++){
            $aux =$x/$i;
            echo ($i==$y)?$aux."<br>La posicion $y en la cadena es: ":$aux.", ";
          }echo $aux;
        }
    }   serie (60, 5)

?>