<?php
    list($A, $B, $C, $D) = array_map('intval', explode(' ', fgets(STDIN)));
    if($B > $C && $D > $A && $C+$D > $A+$B && $C > 0 && $D > 0 && fmod($A,2) == 0)
    {
        echo "Valores aceitos\n";
    }
    else
    {
        echo "Valores nao aceitos\n";
    }
?>