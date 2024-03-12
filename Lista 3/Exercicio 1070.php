<?php
    $x = readline();
    for($i = $x; $i <= $x+11; $i++)
    {
        if(fmod($i,2) != 0)
        {
            echo $i."\n"; 
        }
    }
?>