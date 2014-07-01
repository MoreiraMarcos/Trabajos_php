<?php

/**
 * @author Boomer
 * @copyright 2014
 * 
 * Escriba una función para eliminar los duplicados de una matriz ordenada de enteros en una línea de código. 
 * (Usted puede usar tantas declaraciones como sea necesario, pero el código debe ser escrito en una sola línea).
 * Ejemplo:
 * Si la función recibe esta matriz: A = [-3, -2, 0, 0, 5, 7, 9, 11, 11, 25]
 * La función debe devolver: A = [-3, -2, 0, 5, 7, 9, 11, 25]
 * La función recibirá un arreglo de enteros, y devolver una matriz de enteros.
 *
 * 
 */

    function matriz($vector) 
    {
        $ver=array_values(array_unique($vector));
        print_r($ver);
    } 
    echo "<pre>";
    
    
     matriz(array(1,1,2,2,3,4,5,6,6));
    echo "</pre>";

?>