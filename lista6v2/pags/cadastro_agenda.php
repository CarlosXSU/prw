<?php 
    include ('conexao.php');

     // Upload da foto     
     $fotoNome = $_FILES['foto']['name'];
     $target_dir = "../img/upload/";
     $target_file = $target_dir . basename($_FILES["foto"]["name"]);
     // Select file type
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     // Valid file extensions
     $extensions_arr = array("jpg","jpeg","png","gif");
 
     // Check extension
     if( in_array($imageFileType,$extensions_arr) ){        
         // Upload file
         if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
             $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
         }
     }

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $dt_cadastro = date("Y-m-d"); //O meu MySQL não aceitou outro modelo de data :(

    echo "Nome: $nome
    <br>Apelido: $apelido
    <br>Endereco: $endereco
    <br>Bairro: $bairro
    <br>Cidade: $cidade
    <br>Estado: $estado
    <br>Telefone: $telefone
    <br>Celular: $celular
    <br>Email: $email
    <br>Data de cadastro: $dt_cadastro";

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro, foto_blob, foto_nome)
        VALUES ('$nome', '$apelido', '$endereco', '$bairro', '$cidade', '$estado', '$telefone', '$celular', '$email', '$dt_cadastro', '$fotoBlob', '$fotoNome')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<br><br>Dados inseridos com sucesso!";
    } else {
        echo "<br><br>Erro ao inserir a banco de dados: ".mysqli_error($con);
    }
?>
<a href='../index.php'> Voltar...</a>