<?php

/**
 * @author Marcos
 * @copyright 2014
 * 
 * Dado un número entero positivo determinar si es la potencia de dos de otro número entero.
 * No empezar a programar, lea las limitaciones.
 * Por ejemplo:
 * Si la función recibe 25, debe devolver TRUE, porque 5 ^ 2 = 25 Si la función recibe 1, debe devolver TRUE, porque 1 ^ 2 = 1 
 * Si la función recibe 16, debe devolver TRUE, porque 4 ^ 2 = 16 Si la función recibe 14, debería devolver FALSE.
 * Limitación: No es posible utilizar las funciones de raíz cuadrada (sqrt () o similar), potenciación (pow () o similar). 
 * Sólo se permiten las operaciones aritméticas básicas (suma, resta, multiplicación, división), y las operaciones lógicas.
 * La función recibe un número entero positivo mayor que 0, y debe devolver un valor booleano.
 *
 * 
 */
    
    function factor ($n){
        if ($n > 0){
            $i=1;
            while ($i<=$n){
                $multiplcacion = $i*$i;
                if ($multiplcacion == $n){
                    echo "$i <sup> 2 </sup> = $multiplcacion : //";
                    echo " true";
                    break;
                } else if($i==$n && $multiplcacion != $n){
                    echo "false";
                }
                $i++;
            }
            
        }else{
            echo "El numero debe de ser mayor que 0";
        }
    }  echo factor (9)


?>