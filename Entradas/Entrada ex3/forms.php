<?php
    echo "<h2>Cadastro</h2>";

    // $_GET['nome_campo']
    // $_POST['nome_campo']

    $nome = $_POST['nome']; //Recebndo dado enviado do HTML
    echo "Nome: $nome"; //Mostrando dado via POST
?>