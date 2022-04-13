<?php 

    $produto = $_POST['txtProp'];
    $produtos = array('faca','console','computador','jogo');
    $preco = array(20, 5000, 6500, 125);

    $produto = strtolower($produto); //Deixando igual Jogos, Jogos, jogos, joGos...

    $indice = array_search($produto, $produtos);

    if($indice === false){
        echo "Produto não encontrado :( <br>";
    }
    else{
        echo "produto encontrado, o seu código é: $indice <br>
              Preço do produto: R$ $preco[$indice]";
    }

?> 