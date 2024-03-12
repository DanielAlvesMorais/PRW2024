<?php
    $x = readline();
    for($i = 1; $i <= $x; $i++)
    {
        if(fmod($i,2) != 0)
        {
            echo $i."\n"; 
        }
    }
?>