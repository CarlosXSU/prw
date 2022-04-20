<?php 
    include ('conexao.php');
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $fone=$_POST['tel'];
    echo "<p>Nome do usuário $nome <br>
            E-mail: $email <br>
            Telefone: $fone </p>";

    $sql = "INSERT INTO  usuario (nome_usuario, email_usuario, telefone_usuario)
        VALUES ('".$nome."', '".$email."', '".$fone."')";

    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo "<br><br>Dados inseridos com sucesso!";
    }
    else
    {
        echo "<br><br>Erro ao inserir oo banco de dados: ".mysqli_error($con);
    }
?>