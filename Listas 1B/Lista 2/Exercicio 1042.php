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
    echo $p3."\n";
    echo $p2."\n";
    echo $p1."\n";
    echo "\n";
    echo $A."\n";
    echo $B."\n";
    echo $C."\n";
?>