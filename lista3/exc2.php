<?php

    //sorriso
    $palavra = "Carlos";
    echo "Palavra sem modificações: ". $palavra. "<br>";

    $novaPal = str_replace('a', 'x', $palavra);
    $novaPal = str_replace('e', 'x', $novaPal);
    $novaPal = str_replace('i', 'x', $novaPal);
    $novaPal = str_replace('o', 'x', $novaPal);
    $novaPal = str_replace('u', 'x', $novaPal);

    $novaPal = str_replace('A', 'X', $novaPal);
    $novaPal = str_replace('E', 'X', $novaPal);
    $novaPal = str_replace('I', 'X', $novaPal);
    $novaPal = str_replace('O', 'X', $novaPal);
    $novaPal = str_replace('U', 'X', $novaPal);

    echo "Palavra após susbstituir todas as vogais por X: ". $novaPal;

?>