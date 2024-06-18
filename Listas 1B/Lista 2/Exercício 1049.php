<?php
    $a = readline();
    $b = readline();
    $c = readline();
    
    if($a == "vertebrado")
    {
       if($b == "ave")
        {
            if($c == "carnivoro")
            {
                echo "aguia";
            }
            else
            {
                echo "pomba";
            } 
        }
        else
        {
            if($c == "onivoro")
            {
                echo "homem";
            }
            else
            {
                echo "vaca";
            } 
        } 
    }
    else
    {
        if($b == "inseto")
        {
            if($c == "hematofago")
            {
                echo "pulga";
            }
            else
            {
                echo "lagarta";
            } 
        }
        else
        {
            if($c == "hematofago")
            {
                echo "sanguessuga";
            }
            else
            {
                echo "minhoca";
            } 
        } 
    }
    echo"\n";
?>