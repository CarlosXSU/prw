<?php

    //Já que o exercício não pediu, irei considerar que a pessoa dihitou os dados corretamente
    //então não verificarei se há algo errado com eles

    $nome = $_POST['txtNome'];
    $hora = $_POST['txtHora'];
    
    $hora = substr($hora,0,2);

    if($hora <= 12){
        echo "Bom dia $nome!"; //descobri que posso colocar a variável dentro das aspas 
    }
    else {
        if($hora <= 18){
            echo "Boa tarde $nome!";
        }
        else{
            echo "Boa noite $nome!";
        }
    }
?>