<?php
    $a[0] = readline();
    $a[1] = readline();
    $a[2] = readline();
    $a[3] = readline();
    $a[4] = readline();
    $p = 0;
    $im = 0;
    $po = 0;
    $n = 0;
    for($i = 0;$i < 5;$i++)
    {
        if(fmod($a[$i], 2) == 0)
        {
            $p = $p + 1;
        }
        else
        {
            $im = $im + 1;
        }
        if($a[$i] > 0)
        {
            $po = $po + 1;
        }
        if($a[$i] < 0)
        {
            $n = $n + 1;
        }
    }
    echo $p." valor(es) par(es)\n";
    echo $im." valor(es) impar(es)\n";
    echo $po." valor(es) positivo(s)\n";
    echo $n." valor(es) negativo(s)\n";
?>