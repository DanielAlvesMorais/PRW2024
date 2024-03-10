<?php
    list($n1, $n2, $n3, $n4) = array_map('floatval', explode(' ', fgets(STDIN)));
    $Med = ($n1*0.2) + ($n2*0.3) + ($n3*0.4) + ($n4*0.1);
    $Med = $Med*10;
    $Med = floor($Med);
    $Med = $Med/10;
    echo "Media: ".number_format($Med, 1, '.', '')."\n";
    if($Med >= 7)
    {
        echo "Aluno aprovado.\n";
    }
    if($Med < 5)
    {
        echo "Aluno reprovado.\n";
    }
    if($Med >= 5 && $Med < 7)
    {
        $Ex = fgets(STDIN);
        echo "Aluno em exame.\n";
        echo "Nota do exame: ".$Ex;
        
        $Mef = ($Med + $Ex) / 2;
        if($Mef >= 5)
        {
            echo "Aluno aprovado.\n";
        }
        if($Mef < 5)
        {
            echo "Aluno reprovado.\n";
        }
        echo "Media final: ".number_format($Mef, 1, '.', '') ."\n";
    }
?>