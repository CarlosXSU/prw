<?php

    //Já que o exercício não pediu, irei considerar que a pessoa dihitou os dados corretamente
    //então não verificarei se há algo errado com eles

    $nome = $_POST['txtNome'];
    $idade = $_POST['txtIdade'];
    $dias = $idade * 365;

    echo "Olá ". $nome . ", você tem ". $dias. " dias de vida!";
?>