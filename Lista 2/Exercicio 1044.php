<?php
    list($A, $B) = array_map('floatval', explode(' ', readline()));
    if(fmod($A, $B) == 0 or fmod($B, $A) == 0)
    {
        echo "Sao Multiplos\n";
    }
    else
    {
        echo "Nao sao Multiplos\n";
    }
?>