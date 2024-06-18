<?php
    $x = readline();
    for($i = 1; $i < 10000; $i++)
    {
        if(fmod($i, $x) == 2)
        {
            echo $i."\n";
        }
    }
?>