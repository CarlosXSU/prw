<?php

    //VERIFICANDO SE TODOS OS CAMPOS FORAM PREENCHIDOS
    //Empty: verifica se determinada string está vazia
    if(empty($_POST['opt'])){
        echo "Você não selecionou nenhuma opção, por favor, selecione.";
        exit;
    }
    else{ 
        if(empty($_POST['N1']) && $_POST['N1'] != 0){
            echo "Você não digitou o número 1, digite >:(";
            exit;
        }
        else {
            if(empty($_POST['N2']) && $_POST['N2'] != 0){
                echo "Você não digitou o número 2, digite >:(";
                exit;
            }
            else{}
        }
    }

    $opc = $_POST['opt'];
    $n1 = $_POST['N1'];
    $n2 = $_POST['N2'];

    if($opc == 1){
        echo "A soma dos dois valores é: " . $n1 + $n2; 
    }
    else{
        if($opc == 2){
            echo "A subtração dos dois valores é: " . $n1 - $n2; 
        }
        else{
            if($opc == 3){
                if($n2 != 0){
                    echo "A divisão dos dois valores é: " . $n1 / $n2;
                }
                else{
                    echo "<h1><span style='color:red'>É impossível dividir por zero, por favor, digite novamente.</span></h1>";
                }
            }
            else{
                if($opc == 4){
                    echo "A multiplicação dos dois valores é: " . $n1 * $n2;
                }
            }
        }
    }
?>
