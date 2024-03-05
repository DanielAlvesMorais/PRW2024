<?php
    $X = intval(readline());
    $Y = floatval(readline());
    $Gasto = $X / $Y;
    echo number_format($Gasto, 3, '.', '')." km/l\n";
?>
