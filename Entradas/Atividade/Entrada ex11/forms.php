<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $F = $_POST['f'];
    $M = ($n1+$n2)/2;

    if($F >= 75 and $M>= 5)
    {
        echo "Você está aprovada";
    }
    else
    {
        if($F < 75)
        {
            echo "<span style='color:red;'>Você reprovou pela frequencia</span>";
        }
        else
        {
            if($M< 5)
            {
                echo "<span style='color:red;'>Você reprovou por nota</span>";
            }
            else
            {
                echo "<span style='color:red;'>Você reprovou pela frequencia e pela nota</span>";
            }
        }
    }

?>