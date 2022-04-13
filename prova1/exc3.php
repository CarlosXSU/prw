<?php 

    $peso = $_POST['txtPeso'];
    $altura = $_POST['txtAltura'];
    $imc = 0;
    $erro = 0;

    //O exercício não pediu restrições, mas eu coloquei algumas...
    //strstr, tentei utlizar esse comando, porém não consegui. Caso o indivíduo colocar uma string
    //na altura ou no peso, ele apenas receberá o erro padrão do php.

    if(empty($peso) || $peso <= 0){
        $erro = 1;
        echo "Por favor, preencha o campo de peso com um dado válido <br>";
    }
    if(empty($altura) || $altura <= 0){
        $erro = 1;
        echo "Por favor, preencha o campo de altura com um dado válido <br>";
    }

    if($erro==1){
        echo "<span style='color:red'> PREENCHA NOVAMENTE OS DADOS! </span> ";
    }
    else{
        $imc = $peso / ($altura * $altura);

        if($imc < 17){
            echo "Muito abaixo do peso.";
        }
        else{
            if ($imc < 18.5){
                echo "Abaixo do peso.";
            }
            else {
                if($imc < 25){
                    echo "Peso normal.";
                }
                else{
                    if($imc < 30){
                        echo "Acima do peso.";
                    }
                    else{
                        if($imc < 35){
                            echo "Obesidade I";
                        }
                        else{
                            if($imc < 40){
                                echo "Obesidade II (severa)";
                            }
                            else{
                                echo "Obesidade III (mórbida)";
                            }
                        }
                    }
                }
            }
        }
    }


?> 