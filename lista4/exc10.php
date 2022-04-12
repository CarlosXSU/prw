<?php

    //Já que o exercício não pediu, irei considerar que a pessoa digitou os dados corretamente
    //então não verificarei se há algo errado com eles

    $ca1 = $_POST['txtCa1'];
    $ca2 = $_POST['txtCa2'];
    $ca3 = $_POST['txtCa3'];
    $arrecad = ($ca1*10) + ($ca2*12) + ($ca3*15);
    
    echo "O valor arrecadado foi: $arrecad";
?>