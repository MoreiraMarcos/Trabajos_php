<?php

/**
 * @author Boomer
 * @copyright 2014
 * 
 * Un n�mero perfecto es un n�mero entero positivo que es igual a la suma de sus divisores apropiados. 
 * Por ejemplo, 6 es un n�mero perfecto porque 6 = 1 +2 +3.
 * Crear una funci�n que recibe dos valores X y Y, debe devolver  el menor n�mero perfecto encontrado, que es mayor o igual que X y menor o igual a Y. 
 * Si ning�n n�mero perfecto encontr�, debe devolver -1.
 * Por ejemplo, si la funci�n recibe X = 5, Y = 7, se debe devolver 6, porque 6 es el n�mero perfecto menor entre 5 y 7.
 * La funci�n recibir� dos enteros y devolver un entero.
 * 
 */

    function numero_perfecto($x, $y)
  {
    $cont=0;
    $num=6;
    if($x<0 || $y<0)
    {
        echo "El numero no puede ser negativo";
    }
    else
    {
        
        $aux=0;
        for ($i=$x; $i<=$y; $i++){
            
            if ($i==6){
               echo $i.", ";
               break; 
            } elseif ($i == 26){
                echo $i.", ";
                break;
            } elseif ($i == 496){
                echo $i.", ";
                break;                
            } elseif ($i == 8128){
                echo $i.", ";
                break;                
            } else{
                echo -1;
                break;
            }

        }
        
    }
  }
  
    numero_perfecto(60,70);

?>