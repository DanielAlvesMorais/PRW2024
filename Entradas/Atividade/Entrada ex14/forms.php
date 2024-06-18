<?php
    $nome = $_POST['name'];
    $h = $_POST['ano'];

    if($h < 1200)
    {
        echo "Bom dia $nome";
    }
    if($h > 1200 and $h < 1800)
    {
        echo "Boa tarde $nome";
    }
    if($h >= 1800)
    {
        echo "Boa noite $nome";
    }
?>