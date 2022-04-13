<?php 

    $user = $_POST['txtUser'];
    $password = $_POST['txtPass'];

    $users = array("FeliPinho123*", "RobinhoOo", "André");
    $passwords = array("12345", "PHP prova :(", "S4turn0");

    $indice = array_search($user, $users);

    if($indice === false){
        echo "Usuário não esncontrado.";
    }
    else {
        if ($password == $passwords[$indice]){
            echo "Login bem-sucedido!";
        }
        else {
            echo "Acesso negado.";
        }
    }

?> 