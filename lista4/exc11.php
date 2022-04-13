<?php
    //Resolvendo apenas os problemas que o exercício destacou

    $pront = $_POST['txtPront'];
    $nome = $_POST['txtNome'];
    $idade = $_POST['txtIdade'];
    $opt = $_POST['optPe'];
    $sel = $_POST['selMod'];
    $erro = 0;

    if(empty($pront)){
        echo "O prontuário está em branco :(<br>";
        $erro = 1;
    }
    if(empty($nome)){
        echo "O nome está em branco :(<br>";
        $erro = 1;
    }
    if($idade < 15 || $idade > 75){
        echo "A idade tem que estar entre 15 e 75 anos.<br>";
        $erro = 1;
    }
    if(empty($opt)){
        echo "Escolha um período, oras...<br>";
        $erro = 1;
    }
    
    if($erro == 1){
        echo "Preencha os dados corretamente.";
    }
    else {
        echo "Tudo certo <br>";
        echo "$pront <br>";
        echo "$nome certo <br>";
        echo "$idade certo <br>";
        echo "$opt certo <br>";
        echo "$sel certo <br>";
    }
?>