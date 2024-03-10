<?php
    $X = doubleval(readline());
    
    if($X >= 0 && $X <= 25)
    {
        echo "Intervalo [0,25]\n"; 
    }
    else
    {
        if($X > 25 && $X <= 50)
        {
            echo "Intervalo (25,50]\n"; 
        }
        else
        {
            if($X > 50 && $X <= 75)
            {
                echo "Intervalo (50,75]\n"; 
            }
            else
            {
                if($X > 75 && $X <= 100)
                {
                    echo "Intervalo (75,100]\n"; 
                }
                else
                {
                    echo "Fora de intervalo\n";
                }
            }
        }
    }
?>