<?php
    $End = $_POST['end'];
    $Des = $_POST['CR'];
    $Sal1 = $_POST['alf'];
    $Sal2 = $_POST['tom'];
    $Sal3 = $_POST['ceb'];
    $Carn = $_POST['O'];
    $Acom = $_POST['acompanhamento'];

    echo "Enrereço :$End<br>";
    echo "Descrisão :$Des<br>";
    echo "Pedido :";
    if(true == $Sal1)
    {
        echo "Alface, ";
    }
    if(true == $Sal2)
    {
        echo "Tomate, ";
    }
    if(true == $Sal3)
    {
        echo "Cebola, ";
    }
    if($Carn == 1)
    {
        echo "Fraldinha, ";
    }
    if($Carn == 2)
    {
        echo "Picanha, ";
    }
    if($Carn == 3)
    {
        echo "Patinho, ";
    }
    if($Acom == 1)
    {
        echo "Arroz.";
    }
    if($Acom == 2)
    {
        echo "Mandioca.";
    }
    if($Acom == 3)
    {
        echo "Pão de Alho";
    }
    
?>