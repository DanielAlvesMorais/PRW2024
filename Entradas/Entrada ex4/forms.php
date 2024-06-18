<?php
    $username = $_POST['Username'];
    $senha = $_POST['Senha'];
    $nome = $_POST['Nome'];
    $email = $_POST['Email'];
    $cidade = $_POST['Cidade'];
    $estado = $_POST['Estado'];

    echo "Cadastro: <br>"; 
    echo "Usarname: $username<br>";
    echo "Senha: $senha<br>";
    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    echo "Cidade: $cidade<br>";
    echo "Estado: $estado<br><br><br>";

    $erro=0;
    if (strlen($username)<5)
    { 
    echo "O username deve possuir no mínimo 5 caracteres.<br>"; $erro=1;
    }
    if (strlen($senha)<5)
    { 
    echo "A senha deve possuir no mínimo 5 caracteres.<br>"; $erro=1;
    }
    if(empty($cidade))
    { 
        echo "Favor digitar sua cidade<br>"; $erro=1;
    }
    if(strlen($estado)!=2)
    {
        echo "Favor digitar seu estado corretamente<br>"; $erro=1;
    }
    //VERIFICA SE NÃO HOUVE ERRO
    if($erro==0)
    { 
        echo "Todos os dados foram digitados corretamente!<br>";
    }
?>