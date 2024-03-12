<?php
    $q = 0;
    while($q != 2)
    {
        list($A, $B) = array_map('intval', explode(' ', readline()));
        
        if($A > 0 and $B > 0)
        {
            echo "primeiro\n";
        }
        else if($A < 0 and $B < 0)
        {
            echo "terceiro\n";
        }
        else if($A > 0 and $B < 0)
        {
            echo "quarto\n";
        }
        else if($A < 0 and $B > 0)
        {
            echo "segundo\n";
        }
        else
        {
            $q = $q + 1;
        }
    }
?>