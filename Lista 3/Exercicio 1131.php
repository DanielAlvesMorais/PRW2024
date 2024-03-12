<?php
    $i = 1;
    $q = 0;
    $In = 0;
    $G = 0;
    $e = 0;
    while($i == 1)
    {
        list($a, $b) = array_map('intval', explode(' ', readline()));
        
        if($a > $b)
        {
            $In = $In + 1;
        }
        else if($a < $b)
        {
            $G = $G + 1;
        }
        else
        {
            $e = $e + 1;    
        }
        
        $q = $q + 1;
        
        echo "Novo grenal (1-sim 2-nao)\n";
        $c = readline();
        
        if($c == 2)
        {
            $i = 0;
        }
    }
    echo $q." grenais\n";
    echo "Inter:".$In."\n";
    echo "Gremio:".$G."\n";
    echo "Empates:".$e."\n";
    
    if($In > $G)
    {
        echo "Inter venceu mais\n";
    }
    else if($In < $G)
    {
        echo "Gremio venceu mais\n";
    }
    else
    {
        echo "Nao houve vencedor\n";
    }
?>