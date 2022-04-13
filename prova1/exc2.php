<?php

    $num1=4;
    $num2=12;
    $multiplicacao=0;

    echo "A multiplicação dos dois números digitados (usando apenas o operador +) é: ";

    for($i=1;$i<=$num1;$i++){
        $multiplicacao = $multiplicacao + $num2;
    }

    echo $multiplicacao;

?>