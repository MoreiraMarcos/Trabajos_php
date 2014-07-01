<?php

/**
 * @author Marcos
 * @copyright 2014
 * 
 * Dadas dos cadenas S1 y S2. Eliminar en S1 todos esos caracteres que se presentan en S2. 
 * Devolver un S1 limpio con los caracteres eliminados. Cualquier carácter se elimina tanto en mayúsculas como en minúsculas.
 * Por ejemplo, dado:
 * S1 = "La vida es bella" S2 = "El santo"
 * La función debe devolver: "vidb".
 * La función recibirá 2 cadenas y devolver una cadena
 *
 * 
 */

    function cadenas($s1,$s2)
    {
        $ls1= strlen($s1);
        $ls2= strlen($s2);
        $igual;
       $caracterfinal="";
        for($i=0;$i<$ls1;$i++)
            {
                $igual=false;
                $caracters1=$s1[$i];
                for($j=0;$j<$ls2;$j++)
                    {
                        $caracters2=$s2[$j];
                        if($caracters1==$caracters2)
                            {
                                $igual=true;
                            }
                    }
                    if(!$igual)
                                {
                                   $caracterfinal=$caracterfinal.$s1[$i];
                               }
            }
            echo $caracterfinal;
    }
    
    
    cadenas("Marcos", "aeiou");

?>