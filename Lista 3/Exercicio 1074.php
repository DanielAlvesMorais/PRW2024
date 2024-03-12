<?php
    $x = readline();
    for($i = 0; $i < $x; $i++)
    {
        $y[$i] = readline();
    }
    for($i = 0; $i < $x; $i++)
    {
        if(fmod($y[$i], 2) == 0 and $y[$i] != 0)
        {
            echo "EVEN";
        }
        else if(fmod($y[$i], 2) != 0 and $y[$i] != 0)
        {
            echo "ODD";
        }
        else
        {
            echo "NULL\n";
        }
        if($y[$i] > 0 and $y[$i] != 0)
        {
            echo " POSITIVE\n";
        }
        else if($y[$i] < 0 and $y[$i] != 0)
        {
            echo " NEGATIVE\n";
        }
    }
?>