<?php 

    include ('conexao.php');
    $sql = 'SELECT * FROM fluxo_caixa';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    //retorna a primeira linha
    //$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>listagem de fluxos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body class="center">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">FLUXO-CAIXA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="../index.php">INÍCIO</a>
                <a class="nav-item nav-link" href="cadastro_fluxo_caixa.html">Cadastro</a>
                <a class="nav-item nav-link active" href="#">Listagem <span class="sr-only">(Página atual)</span></a>
                <a class="nav-item nav-link" href="consulta_fluxo_caixa.html">Consultar</a>
                </div>
            </div>
        </nav>

    <table align="center" border="1" width="900">
        <!-- tr>th*4 -->
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                $dt = explode("-",$row['data']);
                echo "<td>" .$row['id']. "</td>";
                echo "<td>" .$dt[2]."/".$dt[1]."/".$dt[0]."</td>";
                echo "<td>" .$row['tipo']. "</td>";
                echo "<td>" .$row['valor']. "</td>";
                echo "<td><a href='altera_fluxo_caixa.php?id=".$row['id']."'>" .$row['historico']. "</a></td>";
                echo "<td>" .$row['cheque']. "</td>";
                echo "<td><a href='excluir_fluxo_caixa.php?id=".$row['id']."'> Excluir</a></td>";
                echo "</tr>";
            }
        ?>

    </table>
</body>
</html>