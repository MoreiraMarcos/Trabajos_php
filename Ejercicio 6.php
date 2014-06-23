<?php

/**
 * @author Marcos
 * @copyright 2014
 * 
 * Dada una cadena, que contiene palabras y espacios (caracteres especiales), crear una función que devuelva una cadena con las palabras en un orden inverso.
 * Ejemplo:
 * Si la función recibe: "esta es una prueba", debe regresar: "prueba una es este".
 * Si se recibe una cadena vacía, una cadena vacía se debe devolver. Si sólo hay una palabra recibida, la misma palabra que se debe devolver.
 * La función recibirá una cadena y devolver una cadena.
 *
 * 
 */
    
    function vuelta ($cadena){
        foreach (array_reverse(explode(" ",$cadena))as $item)
        
            echo $item." ";
    }
    
    echo vuelta ("esta es una prueba");


?>