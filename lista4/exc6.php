<?php

    //Já que o exercício não pediu, irei considerar que a pessoa digitou os dados corretamente
    //então não verificarei se há algo errado com eles

    $nome = $_POST['txtNome'];
    $freq = $_POST['txtFreq'];
    $num1 = $_POST['txtNum1'];
    $num2 = $_POST['txtNum2'];
    $media= ($num1 + $num2)/2;

    echo "Nome do aluno: ". $nome.
         "<br>Frequência do aluno: ". $freq.
         "<br>A nota 1 do aluno foi: ". $num1.
         "<br>A nota 2 do aluno foi: ". $num2.
         "<br>A média do aluno foi: ". $media. "<br>";

    if($media < 5 && $freq < 75){
        echo "<span style='color:red'> O aluno reprovou tanto por frequência, como por nota. </span>";
    }
    else{
        if($media < 5){
            echo "<span style='color:red'> O aluno reprovou por nota. </span>";
        }
        else{
            if($freq < 75){
                echo "<span style='color:red'> O aluno reprovou por frequência. </span>";
            }
            else{
                echo "<span style='color:green'> Aluno aprovado. </span>";
            }
        }
    }

?>