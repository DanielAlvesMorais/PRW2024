<?php
    $name = $_GET['nome'];
    $idade = $_GET['idade'];
    $salario = $_GET['salario'];
    $INSS = 0;
    $IFPR = 0;

    if($salario >= 0.01 and $salario <= 1412)
    {
        $INSS = $salario/100*7.5;
    }
    if($salario >= 1412.01 and $salario <= 2666.68)
    {
        $INSS = $salario/100*9;
    }
    if($salario >= 2666.69 and $salario <= 4000.03)
    {
        $INSS = $salario/100*12;
    }
    if($salario >= 4000.04 and $salario <= 7786.02)
    {
        $INSS = $salario/100*14;
    }

    if($salario >= 0.01 and $salario <= 2112.00 and $idade < 65)
    {
        $IFPR = 0;
    }
    if($salario >= 2112.01 and $salario <= 2866.65 and $idade < 65)
    {
        $IFPR = ($salario-$INSS) * 0.075 - 158.40;
    }
    if($salario >= 2826.66 and $salario <= 3751.05 and $idade < 65)
    {
        $IFPR = ($salario-$INSS) * 0.15 - 370.40;
    }
    if($salario >= 3751.06 and $salario <= 4664.68 and $idade < 65)
    {
        $IFPR = ($salario-$INSS) * 0.225 - 651.73;
    }
    if($salario > 4664.68 and $idade < 65)
    {
        $IFPR = ($salario-$INSS) * 0.275 - 884.96;
    }

    $Liq = $salario - $INSS - $IFPR;
    
    echo "SR.".$name." seu salário bruto é de ".$salario." você irá pagar R$
    ".number_format($INSS, 2, '.', '')." de INSS e R$".number_format($IFPR, 2, '.', '')." de IFPR, gerando um salário líquido de R$".number_format($Liq, 2, '.', '');
?>