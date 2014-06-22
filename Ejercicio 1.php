<?php

/**
 * @author Marcos
 * @copyright 2014
 * 
 * 1.- Mira esta serie: 7, 6, 8, 4, 9, 2, 10, 0, 11, -2, ...
 *     Cree una función que recibe dos enteros: x e y. Si alguno de ellos es 0 o negativo, o si son mayores que 255, la función debe devolver -1
 *     De lo contrario, la función debe devolver la suma de los elementos X e Y de la serie.
 *     Por ejemplo: Si la función recibe x = 1, y = 3, se debería devolver: 15 (Debido a que la suma de la primera, más el tercer argumento es 7 +8 = 15)..
 *     Si la función recibe x = 8, y = 9, es conveniente devolver 11. (Debido a que la suma de la octava más el elemento noveno es 0 11 = 11).
 *     La función recibirá 2 enteros, y devuelve un entero.
 *
 * 
 */
    //$mi_array=0;
 
    function suma ($x, $y){
        
        if (($x <= 0 || $y <= 0) || ($x > 255 || $y > 255)){
            echo -1;
        }  else {
            
            $contador=0;
            $i=5;
            $aux=10;
            while ($i<255){
                $aux-=2;
                $i++;
                $x++;
                $y++;
                $serie  [$i] = $i." ";
                $serie1 [$i] = $aux." ";
                
                
            }
            //print_r(array_values($serie));
            //print_r(array_values($serie1));
            
            for ($i=0; $i<count($serie)-249; $i++){
                for ($j=0; $j<count($serie1)-249; $j++){
                $x-=244;
                $y-=244;
                    
                    echo $serie [$x]." + ".$serie1 [$y]." = ";
                    echo $serie [$x]+$serie1[$y];
                
                }
                
            }
                              
         }   
        
    }    suma (1,2);



?>