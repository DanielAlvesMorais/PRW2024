<?php
    $VM = $_POST['VM'];
    $D = $_POST['D'];
    $CM = $_POST['CM'];
    $T = number_format($D/$VM,2,".",""); //Tempo gasto
    $A = number_format($D/$CM,2,".",""); //Combustívl gasto
    echo "Total Horas: $T<br><br>";
    echo "Total Horas: $A";
?>