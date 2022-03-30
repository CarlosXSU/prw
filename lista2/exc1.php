<?php

   $soma=0;

   for($i=1;$i<100;$i++){
       if ($i%2==0) {
           $soma = $soma + $i;
       }
       else{
       }
   }

   echo "A soma dos números pares menores que 100 é: ". $soma;
   
?>