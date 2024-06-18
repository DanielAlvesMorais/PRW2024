<?php
    $n1 = $_POST['N1'];
    $n2 = $_POST['N2'];
    $Op = $_POST['O'];

    if($Op == 1)
    {
        $r = $n1+$n2;
        echo "$r";
    }
    if($Op == 2)
    {
        $r = $n1-$n2;
        echo "$r";
    }
    if($Op == 3)
    {
        $r = $n1*$n2;
        echo "$r";
    }
    if($Op == 4)
    {
        $r = $n1/$n2;
        echo "$r";
    }
?>