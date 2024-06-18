<?php
    $v = 0;
    $m = 0;
    for($i = 1; $i < 101; $i++)
    {
        $v = readline();
        if($i == 1)
        {
            $m = $v;
            $n = $i;
        }
        if($v > $m)
        {
            $m = $v;
            $n = $i;
        }
    }
    echo $m."\n";
    echo $n."\n";
?>