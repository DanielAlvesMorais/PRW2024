<?php
    $CP = $_POST['CP'];
    $CM = $_POST['CM'];
    $CG = $_POST['CG'];

    $P = $CP*10 + $CM*12 + $CG*15;
    echo "O preço total das camisetas é de R$$P,00";
?>