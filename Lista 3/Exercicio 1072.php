<?php
    $x = readline();
    $in = 0;
    $out = 0;
    for($i = 0; $i < $x; $i++)
    {
        $y[$i] = readline();
    }
    for($i = 0; $i < $x; $i++)
    {
        if($y[$i] >= 10 and $y[$i] <= 20)
        {
            $in = $in + 1;
        }
        else
        {
            $out = $out + 1;
        }
    }
    echo $in." in\n";
    echo $out." out\n";
?>