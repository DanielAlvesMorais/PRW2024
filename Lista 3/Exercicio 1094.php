<?php
    $x = readline();
    $t = 0;
    $tc = 0;
    $tr = 0;
    $ts = 0;
    for($i = 0; $i < $x; $i++)
    {
        list($a, $b) = explode(' ', readline());
        $t = $t + $a;
        if($b == "C")
        {
            $tc = $tc + $a;
        }
        else if($b == "R")
        {
            $tr = $tr + $a;
        }
        else if($b == "S")
        {
            $ts = $ts + $a;
        }
    }
    $pc = 100/$t * $tc;
    $pr = 100/$t * $tr;
    $ps = 100/$t * $ts;
    echo "Total: ".$t." cobaias\n";
    echo "Total de coelhos: ".$tc."\n";
    echo "Total de ratos: ".$tr."\n";
    echo "Total de sapos: ".$ts."\n";
    echo "Percentual de coelhos: ".number_format($pc, 2, '.', '')." %\n";
    echo "Percentual de ratos: ".number_format($pr, 2, '.', '')." %\n";
    echo "Percentual de sapos: ".number_format($ps, 2, '.', '')." %\n";
?>