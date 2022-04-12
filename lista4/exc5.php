<?php

    if(empty($_POST['txtLad1'])){
        echo "Por favor, preencha todos os dados ou digite um comprimento maior que zero.";
        exit;
    }
    if(empty($_POST['txtLad2'])){
        echo "Por favor, preencha todos os dados ou digite um comprimento maior que zero.";
        exit;
    }

    $lad1 = $_POST['txtLad1'];
    $lad2 = $_POST['txtLad2'];
    $area = 0;

    if($lad1 < 0 || $lad2 < 0){
        echo "Não existe comprimento negativo!";
    }
    else{
        $area = $lad1 * $lad2;
        echo "A área do terreno é: ". $area. " medida^2";
    }

?>