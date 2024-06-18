<?php
    $email= $_GET['email'];
    $senha= $_GET['password'];
    $emailT = "daltencedebora@gmail.com";
    $senhaT = 1224;

    if($email == $emailT)
    {
        if($senha == $senhaT)
        {
            echo "Sua senha e seu email estão corretos";
        }
        else
        {
            echo "Sua senha está errada";
        }
    }
    else
    {
        if($senha == $senhaT)
        {
            echo "Seu email está errada";
        }
        else
        {
            echo "Sua senha e seu email estão errados";
        }
    }
?>