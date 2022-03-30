<?php

    echo "Os números primos entre 0 e 200 são: ";

    for($num=1;$num<=200;$num++){
        $primo=1;
        for ($cont=2;$cont<$num;$cont++){
            if($num%$cont==0){
                $primo=0;
                break; 
            }
            else{
            }
            echo "O número "; $num. " é primo". "<br>";
        }
    }
?>