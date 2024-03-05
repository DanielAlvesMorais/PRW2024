<?php
    list($CodigoP1, $QuantP1, $ValorP1) = array_map('floatval', explode(' ', readline()));
    list($CodigoP2, $QuantP2, $ValorP2) = array_map('floatval', explode(' ', readline()));
    $TotalP = $QuantP1 * $ValorP1 + $QuantP2 * $ValorP2;
    echo "VALOR A PAGAR: R$ ".$english_format_TotalP = number_format($TotalP, 2, '.', '')."\n";
?>
