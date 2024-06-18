<?php
    $An = $_POST['ano'];

    if(fmod($An, 4) == 0 and fmod($An, 100) != 0 or fmod($An, 400) == 0)
    {
        echo "O ano é Bissexto";
    }
    else
    {
        echo "Não é Bissexto";
    }
?>