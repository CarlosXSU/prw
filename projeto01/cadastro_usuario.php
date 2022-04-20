<?php 
    $nome_usuario=$_POST['nome'];
    $email_usuario=$_POST['email'];
    $fone_usuario=$_POST['tel'];
    echo "<p>Nome do usuário $nome_usuario <br>
            E-mail: $email_usuario <br>
            Telefone: $fone_usuario </p>";
?>