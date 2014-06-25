<?php

/**
 * @author Marcos
 * @copyright 2014
 * 
 * Mira esta serie: 53, 35, 64, 46, 75, 57, 86 , 68, 97, 79, 108, 810, 119, 911, 1210, 1012, ... las semillas de esta serie fueron los números 5 y 3.
 * Mira esta serie: 103, 310, 114, 411, 125, 512, 136, 613, 147, 714, 158, 815, 169, 916, 1710, 1017, ... las semillas de esta serie fueron los números 10 y 3.
 * Mira esta serie: 1012, 1210, 1113, 1311, 1214, 1412, 1315, 1513, 1416, 1614, 1517, 1715, 1618, 1816, 1719, 1917, ... las semillas de esta serie fueron los números 10 y 12.
 * Cree una función que recibe tres enteros: x, y y z. Si alguno de ellos es 0 o negativo, o si son mayores que 255, la función debe devolver -1
 * La función debe devolver el elemento Z de la serie generada por x y y.
 * Por ejemplo: Si la función recibe x = 5, y = 3, z = 3, devolverá 64, porque 64 es el elemento 3 º en la serie generada cuando x = 5 e y = 3.
 * La función recibirá 3 enteros, devolver un entero.
 *
 * 
 */

    function serie ($x, $y, $z){
        if ($x <= 0 || $y <= 0 || $z <= 0){
            return -1;
        } else{
            for ($i = 1; $i<=$z; $i++)
            {
                if ($i % 2 == 0){
                    $aux = $y.$x.'<br>' ;
                    $y++;
                    $x++;
                  
                }
                else {
                    $aux = $x.$y.'<br>' ;
                } 
            }		return $aux;
        }
    }  echo serie (5, 3, 3);
    
    

?>