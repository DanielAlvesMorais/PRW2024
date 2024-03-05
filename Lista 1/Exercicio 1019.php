<?php
    $Segundos = intval(readline());
    
    $Resto = $Segundos % 3600;
    $Horas = ($Segundos - $Resto)/3600;
    echo $Horas.":";
    
    $Segundos = $Resto % 60;
    $Minutos = ($Resto - $Segundos)/60;
    echo $Minutos.":";
    
    $Resto = $Segundos % 1;
    $Segundoss = ($Segundos - $Resto)/1;
    echo $Segundoss."\n";
?>
