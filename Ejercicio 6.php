<?php

/**
 * @author Marcos
 * @copyright 2014
 * 
 * Dada una cadena, que contiene palabras y espacios (caracteres especiales), crear una funci�n que devuelva una cadena con las palabras en un orden inverso.
 * Ejemplo:
 * Si la funci�n recibe: "esta es una prueba", debe regresar: "prueba una es este".
 * Si se recibe una cadena vac�a, una cadena vac�a se debe devolver. Si s�lo hay una palabra recibida, la misma palabra que se debe devolver.
 * La funci�n recibir� una cadena y devolver una cadena.
 *
 * 
 */
    
    function vuelta ($cadena){
        foreach (array_reverse(explode(" ",$cadena))as $item)
        
            echo $item." ";
    }
    
    echo vuelta ("esta es una prueba");


?>