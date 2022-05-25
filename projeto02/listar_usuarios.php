<?php 

    include ('conexao.php');
    $sql = 'SELECT * FROM usuario';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    //retorna a primeira linha
    //$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>listagem de usuários</title>
</head>
<body>

    <h1 align="center">Listagem de usuários!</h1><br>
    <table align="center" border="1" width="500">
        <!-- tr>th*4 -->
        <tr>
            <th>Código</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$row['id_usuario']. "</td>";
                echo "<td><img src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' width='150' height='150'/></td>";
                echo "<td><a href='altera_usuario.php?id_usuario=".$row['id_usuario']."'>" .$row['nome_usuario']. "</a></td>";
                echo "<td>" .$row['email_usuario']. "</td>";
                echo "<td>" .$row['telefone_usuario']. "</td>";
                echo "<td><a href='excluir_usuario.php?id_usuario=".$row['id_usuario']."'> Excluir</a></td>";
                echo "</tr>";
            }
        ?>

    </table>

</body>
</html>