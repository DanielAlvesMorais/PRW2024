<?php
    $tab = $_POST['es'];

    for($i = 0;$i < 11;$i++)
    {
        $res = $tab*$i;
        echo"$tab x $i = $res <br>";
    }
?>