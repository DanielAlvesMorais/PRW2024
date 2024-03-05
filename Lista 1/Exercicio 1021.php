<?php
$valor = floatval(readline()) * 100;
echo "NOTAS:\n";
$cedulas = [10000, 5000, 2000, 1000, 500, 200];
foreach ($cedulas as $cedula) 
{
    $quantidade = intval($valor / $cedula);
    $valor %= $cedula;
    echo $quantidade . " nota(s) de R$ " . number_format($cedula / 100, 2, '.', '') . "\n";
}
echo "MOEDAS:\n";
$moedas = [100, 50, 25, 10, 5, 1];
foreach ($moedas as $moeda) 
{
    $quantidade = intval($valor / $moeda);
    $valor %= $moeda;
    echo $quantidade . " moeda(s) de R$ " . number_format($moeda / 100, 2, '.', '') . "\n";
}
?>
