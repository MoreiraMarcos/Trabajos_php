<?php

/**
 * @author Marcos
 * @copyright 2014
 * 
 * Mira esta serie: 3, 6, 24, 144, ... la semilla de esta serie fue el n�mero 3 Mira esta serie:. 8, 16, 64, 384, ... la semilla de esta serie era el n�mero 8.
 * Cree una funci�n que recibe tres enteros: x, y y z. Si alguno de ellos es 0 o negativo, o si son mayores que 255, la funci�n debe devolver -1
 * Esta funci�n debe devolver un valor calculado basado en z y y de las series generadas por x. (X es la semilla de la serie).
 * Por ejemplo, si la funci�n recibe x = 3, y = 1, z = 3, la funci�n encontrar� (basado en x), que es la serie 3, 6, 24, 144, ...,
 * sobre la base de esa serie, y basa en y = 1 y z = 3, la funci�n debe devolver 33.
 * Si la funci�n recibe x = 8, y = 2, z = 4, la funci�n debe devolver 464. Si la funci�n recibe x = 5, y = 2, z = 2, la funci�n debe devolver 10. 
 * Para cualquier caso en que Y> z, la funci�n devolver� 0.
 * Para encontrar la relaci�n entre y, z, y el resultado es parte del problema a resolver.
 * La funci�n recibir� 3 enteros, y devolver un entero.
 *
 * 
 */
        function serie ($x, $y, $z){
         if ($x <= 0 || $y <= 0 || $z <= 0 || $x > 255 || $y > 255 || $z > 255)
         {
            return -1;
         }  elseif ($y > $z){
            return 0;
         } 
            else {
                $aux=2;
                echo $x.", ";
                for($i=1 ; $i <= $z ; $i++){
                    //$i++;
                    $x *= $aux;
                    echo $x.", ";
                    $aux++;
                    $aux++;
                
                }
                //return $x;
             }           
        }
        
        echo serie(5,3,4);


?>