<?php

/**
 * @author Boomer
 * @copyright 2014
 * 
 * Escriba una funci�n para eliminar los duplicados de una matriz ordenada de enteros en una l�nea de c�digo. 
 * (Usted puede usar tantas declaraciones como sea necesario, pero el c�digo debe ser escrito en una sola l�nea).
 * Ejemplo:
 * Si la funci�n recibe esta matriz: A = [-3, -2, 0, 0, 5, 7, 9, 11, 11, 25]
 * La funci�n debe devolver: A = [-3, -2, 0, 5, 7, 9, 11, 25]
 * La funci�n recibir� un arreglo de enteros, y devolver una matriz de enteros.
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