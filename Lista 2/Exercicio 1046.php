<?php
    list($A, $B) = array_map('doubleval', explode(' ', fgets(STDIN)));
    $Temp = 0;
    if($A > $B)
    {
        $Temp = 24 - $A + $B;
    }
    if($A < $B)
    {
        $Temp = $B - $A;
    }
    if($A == $B)
    {
        $Temp = 24;
    }
    echo "O JOGO DUROU ".$Temp." HORA(S)\n";
?>