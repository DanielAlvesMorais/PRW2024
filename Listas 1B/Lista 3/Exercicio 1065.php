<?php
    $a[0] = readline();
    $a[1] = readline();
    $a[2] = readline();
    $a[3] = readline();
    $a[4] = readline();
    $v = 0;
    for($i = 0;$i <= 4;$i++)
    {
        if(fmod($a[$i], 2) == 0)
        {
            $v = $v + 1;
        }
    }
    echo $v." valores pares\n";
?>