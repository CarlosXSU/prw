<?php 
    $hostname = "localhost";
    $port = 3307;
    $username = "root";
    $password = "";
    $database = "projeto02";

    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    if(mysqli_connect_errno()){
        printf("Erro ao concetar ao banco de dados ", mysqli_connect_error());
        exit;
    }
    printf("Banco de dados conectado com sucesso!") 
?>