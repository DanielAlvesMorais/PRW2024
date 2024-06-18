<?php
    $a= $_GET['a'];
    $b= $_GET['b'];
    $c= $_GET['c'];
    $x1= (-($b) + sqrt($b*$b - 4 * $a *$c))/2*$a;
    $x2= (-($b) - sqrt($b*$b - 4 * $a *$c))/2*$a;
    echo "X1 = ".$x1."\n";
    echo "X2 = ".$x2;
?>