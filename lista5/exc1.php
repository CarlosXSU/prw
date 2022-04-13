<?php 

    $produto = $_POST['txtProp'];
    $produtos = array('faca','console','computador','jogo');
    $produto = strtolower($produto); //Deixando igual Jogos, Jogos, jogos, joGos...

    $indice = array_search($produto, $produtos);

    if($indice === false){
        echo "Produto não encontrado :( <br>";
    }
    else{
        echo "produto encontrado, o seu código é: $indice <br>";
    }

?> 