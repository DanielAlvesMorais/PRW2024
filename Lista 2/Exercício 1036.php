<?php
    list($A, $B, $C) = array_map('doubleval', explode(' ', fgets(STDIN)));
    $D = ($B**2) - (4*$A*$C);
    
    if($D > 0 && $A != 0)
    {
        $X1 = (-$B + sqrt($D))/(2*$A);
        $X2 = (-$B - sqrt($D))/(2*$A);
        echo "R1 = ".number_format($X1, 5, '.', '') . "\n";
        echo "R2 = ".number_format($X2, 5, '.', '') . "\n";
    }
    else
    {
        echo "Impossivel calcular\n";
    }
?>