<?php
    $BI = $_POST['BI'];
    $nome = $_POST['nome'];
    $idade = $_POST['id'];
    $p = $_POST['p'];
    $m = $_POST['m'];
    $q = 0;

    if(empty($BI))
    {
        echo "Seu prontuário é inválido\n";
        $q = $q + 1;
    }
    if(empty($nome))
    {
        echo "Seu nome é inválido\n";
        $q = $q + 1;
    }
    if($idade < 15 or $idade > 75)
    {
        echo "Sua idade é inválido\n";
        $q = $q + 1;
    }
    if($p != 'V' and $p != 'N')
    {
        echo "Seu período é inválido\n";
        $q = $q + 1;
    }
    if($m<1 or $m>4)
    {
        echo "Seu módulo é inválido\n";
        $q = $q + 1;
    }
    if($q == 0)
    {
        echo "\nCadastro está feito";
    }
?>