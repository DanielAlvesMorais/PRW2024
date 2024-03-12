<?php
list($X, $Y) = array_map('floatval', explode(' ', fgets(STDIN)));

    if($X > 0 && $Y > 0)
    {
        echo "Q1\n";
    }
    if($X < 0 && $Y < 0)
    {
        echo "Q3\n";
    }
    if($X > 0 && $Y < 0)
    {
        echo "Q4\n";
    }
    if($X < 0 && $Y > 0)
    {
        echo "Q2\n";
    }
    if($X == 0.0 && $Y == 0.0)
    {
        echo "Origem\n";
    }
    if($X == 0 && $Y <> 0)
    {
        echo "Eixo Y\n";
    }
    if($X <> 0 && $Y == 0)
    {
        echo "Eixo X\n";
    }
?>