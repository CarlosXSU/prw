<?php

    for($num=1; $num<=200; $num++) {
        $primo = 1;

        for($i=2; $i<$num; $i++){

            if($num%$i == 0){
                $primo = 0;
                break;
            }

        }

        if($primo == 1){
            echo $num." Esse número é primo!<br>";
        }
        else{
            echo $num." Esse número não é primo!<br>";
        }
    }

?>