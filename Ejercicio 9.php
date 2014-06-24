<?php

/**
 * @author Marcos
 * @copyright 2014
 * 
 * Dado un n�mero entero positivo determinar si es la potencia de dos de otro n�mero entero.
 * No empezar a programar, lea las limitaciones.
 * Por ejemplo:
 * Si la funci�n recibe 25, debe devolver TRUE, porque 5 ^ 2 = 25 Si la funci�n recibe 1, debe devolver TRUE, porque 1 ^ 2 = 1 
 * Si la funci�n recibe 16, debe devolver TRUE, porque 4 ^ 2 = 16 Si la funci�n recibe 14, deber�a devolver FALSE.
 * Limitaci�n: No es posible utilizar las funciones de ra�z cuadrada (sqrt () o similar), potenciaci�n (pow () o similar). 
 * S�lo se permiten las operaciones aritm�ticas b�sicas (suma, resta, multiplicaci�n, divisi�n), y las operaciones l�gicas.
 * La funci�n recibe un n�mero entero positivo mayor que 0, y debe devolver un valor booleano.
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