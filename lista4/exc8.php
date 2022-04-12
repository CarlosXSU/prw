<?php

    $num = $_POST['selTab'];
    $resultado = 0;

    for($i=0;$i<=10;$i++){
        $resultado = $num * $i;
        echo $num ." x ". $i ." = ". $resultado ."<br>";
    }
?>