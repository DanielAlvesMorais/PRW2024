<?php
    list($A, $B, $C) = array_map('floatval', explode(' ', fgets(STDIN)));
    if($A > $B)
    {
        if($A > $C)
        {
            echo $A." eh o maior\n";
        }
        else
        {
            echo $C." eh o maior\n";
        }
    }
    else
    {
        if($B > $C)
        {
             echo $B." eh o maior\n";  
        }
        else
        {
            echo $C." eh o maior\n";
        }
    }
?>
