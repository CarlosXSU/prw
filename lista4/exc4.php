<?php 

    $ano = $_POST['txtAno'];

    if(empty($ano)){
        echo "Você não digitou nenhum ano, por favor, digite.";
        exit;
    }

    if($ano%4 == 0 && $ano%100 != 0 || $ano%400 == 0){
        echo "O ano é bissexto!";
    }
    else{
        echo "O ano não é bissexto.";
    }

?> 