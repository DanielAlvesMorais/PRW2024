<?php
    $x = readline();
    $y = readline();
    $c = 0;
    for($i = $y+1; $i <= $x-1; $i++)
    {
        if(fmod($i,2) != 0)
        {
            $c = $c + $i; 
        }
    }
    echo $c."\n"; 
?>