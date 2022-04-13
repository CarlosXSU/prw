<?php 

    $user = $_POST['txtUser'];
    $password = $_POST['txtPass'];

    $usuarios = array('FeliPinho123*' => '12345',
                      'RobinhoOo' => 'PHP prova :(',
                      'André' => 'S4turn0');

   if(array_key_exists($user,$usuarios)){

        if($usuarios[$user] == $password){
            echo "Login bem-sucedido!";
        }else{
            echo "Acesso negado.";
        }

    }
    else{

        echo "Usuário não esncontrado.";

    }

?> 