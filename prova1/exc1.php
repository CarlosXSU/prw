<?php

    $salario=301;
    $newSalario=0;

    if($salario<=0){ 
        echo "Por favor, digite um número válido";
    }
    else {
        if($salario<=300) {
            $newSalario = $salario + ($salario*0.5);
            echo "Salário reajustado: R$ $newSalario";
        }
        else{
            $newSalario = $salario + ($salario*0.3);
            echo "Salário reajustado: R$ $newSalario";
        }
    } 
?>