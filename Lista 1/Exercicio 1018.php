<?php
    $Valor = intval(readline());
    echo $Valor."\n";
    
    $Resto = $Valor % 100;
    $Nota100 = ($Valor - $Resto)/100;
    echo $Nota100." nota(s) de R$ 100,00\n";
    
    $Valor = $Resto % 50;
    $Nota50 = ($Resto - $Valor)/50;
    echo $Nota50." nota(s) de R$ 50,00\n";
    
    $Resto = $Valor % 20;
    $Nota20 = ($Valor - $Resto)/20;
    echo $Nota20." nota(s) de R$ 20,00\n";
    
    $Valor = $Resto % 10;
    $Nota10 = ($Resto - $Valor)/10;
    echo $Nota10." nota(s) de R$ 10,00\n";
    
    $Resto = $Valor % 5;
    $Nota5 = ($Valor - $Resto)/5;
    echo $Nota5." nota(s) de R$ 5,00\n";
    
    $Valor = $Resto % 2;
    $Nota2 = ($Resto - $Valor)/2;
    echo $Nota2." nota(s) de R$ 2,00\n";
    
    $Resto = $Valor % 1;
    $Nota1 = ($Valor - $Resto)/1;
    echo $Nota1." nota(s) de R$ 1,00\n";
?>
