<?php
    $Numero = intval(readline());
    $Hora = doubleval(readline());
    $PrecoH = doubleval(readline());
    $Salario = ($Hora * $PrecoH);
    echo "NUMBER = ".$Numero."\n";
    echo "SALARY = U$ ".$english_format_Salario = number_format($Salario, 2, '.', '')."\n";
?>