<?php

    //teste
    echo substr("Hello world",6). "<br><br>";

    echo substr("Hello world",10)."<br>";
    echo substr("Hello world",1)."<br>";
    echo substr("Hello world",3)."<br>";
    echo substr("Hello world",7)."<br><br>";

    echo substr("Hello world",-1)."<br>";
    echo substr("Hello world",-10)."<br>";
    echo substr("Hello world",-8)."<br>";
    echo substr("Hello world",-4)."<br><br>";

    echo substr("Hello world",0,10)."<br>";
    echo substr("Hello world",1,9)."<br>";
    echo substr("Hello world",0,5)."<br>";
    echo substr("Hello world",6,6)."<br><br>";

    echo substr("Hello world",0,-1)."<br>";
    echo substr("Hello world",-10,-2)."<br>";
    echo substr("Hello world",0,-6)."<br><br>";

    $nome = "Linha de Código";
    $parte = substr($nome, 0, 5);
    echo $parte. "<br>";

    $data = date("m-d-Y");
    $dia = substr($data,3,2);
    $mês = substr($data,0,2);
    $ano = substr($data,6,4);
    $novadata = $dia . "/" . $mês . "/" . $ano;
    echo $novadata;

?>