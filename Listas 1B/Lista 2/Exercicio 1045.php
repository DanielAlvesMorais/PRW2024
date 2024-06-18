<?php
    list($A, $B, $C) = array_map('floatval', explode(' ', fgets(STDIN)));
    if($A > $B)
    {
        if($A > $C)
        {
            $p1 = $A;
            if($B > $C)
            {
                $p2 = $B;
                $p3 = $C;
            }
            else
            {
                $p2 = $C;
                $p3 = $B;
            }
        }
        else
        {
            $p1 = $C;
            $p2 = $A;
            $p3 = $B;
        }
    }
    else
    {
        if($B > $C)
        {
             $p1 = $B;
             if($A > $C)
            {
                $p2 = $A;
                $p3 = $C;
            }
            else
            {
                $p2 = $C;
                $p3 = $A;
            }
        }
        else
        {
            $p1 = $C;
            $p2 = $B;
            $p3 = $A;
        }
    }
    if($p1 >= $p2+$p3)
    {
        echo "NAO FORMA TRIANGULO\n";
    }
    else
    {
        if($p1**2 == $p2**2 + $p3**2)
        {
            echo "TRIANGULO RETANGULO\n";
        }
        if($p1**2 > $p2**2 + $p3**2)
        {
             echo "TRIANGULO OBTUSANGULO\n";  
        }
        if($p1**2 < $p2**2 + $p3**2)
        {
             echo "TRIANGULO ACUTANGULO\n";  
        }
        if($p1 == $p2 && $p3 == $p1)
        {
             echo "TRIANGULO EQUILATERO\n";  
        }
        if($p1 == $p2 && $p1 != $p3 or $p3 == $p1 && $p1 != $p2 or $p3 == $p2 && $p1 != $p3)
        {
             echo "TRIANGULO ISOSCELES\n";  
        }
    }
?>