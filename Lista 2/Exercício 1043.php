<?php
    list($A, $B, $C) = array_map('floatval', explode(' ', fgets(STDIN)));
    if($A < $B+$C && $B < $A+$C && $C < $B+$A)
    {
        $Ped = $A + $B + $C;
        echo "Perimetro = ".number_format($Ped, 1, '.', '')."\n";
    }
    else
    {
        $Area = ($A+$B)*$C/2;
        echo "Area = ".number_format($Area, 1, '.', '')."\n";
    }
?>