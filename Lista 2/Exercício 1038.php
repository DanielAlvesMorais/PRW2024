<?php
    list($Cod, $Quant) = array_map('intval', explode(' ', fgets(STDIN)));
    if($Cod == 1)
    {
        $Pre = $Quant*4.00;
    }
    if($Cod == 2)
    {
        $Pre = $Quant*4.50;
    }
    if($Cod == 3)
    {
        $Pre = $Quant*5.00;
    }
    if($Cod == 4)
    {
        $Pre = $Quant*2.00;
    }
    if($Cod == 5)
    {
        $Pre = $Quant*1.50;
    }
    echo "Total: R$ ".number_format($Pre, 2, '.', '') ."\n";
?>