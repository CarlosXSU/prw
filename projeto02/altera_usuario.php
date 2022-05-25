<?php 
    include ('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = 'SELECT * FROM usuario where id_usuario ='. $id_usuario;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Fromulário de login</title>
        <meta charset="utf-8">

        <style>
            h1 {
                text-align: center;
                align-items: center;
            }
            p {
                margin: 0;
                position: absolute;
            }
            input {
                margin-left: 10vh;
            }
            header {
                align-items: center;
                background-color: rgb(103, 163, 231);
                width: 200vh;
                height: 10vh;
                border-style: solid;
                border-color: black;
            }
            #tabela {
                padding-top: 4vh;
            }
            #tel {
                margin-left: 17vh;
            }
            #botao {
                margin-top: 1vh;
                margin-left: 14vh;
                padding-left: 2vh;
                padding-right: 2vh;
            }
            .container {
               width: 80vh;
               height: 20vh;
               margin-top: 20vh;
               margin-left: auto;
               margin-right: auto;
               background-color: rgb(103, 163, 231);
               border: 2px;
               border-style: solid;
               border-color: black;
            }
            .center{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 150px;
                height: 150px;
            }
        </style>
    </head>

    <body>

        <header>
            <h1>Alteração de usuário - IFSP</h1>
        </header>

        <?php echo "<img class='center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' align='center' width='150' height='150'/>"; ?>  

        <form method="post" action="altera_usuario_exe.php" enctype="multipart/form-data">

            <div class="container">
                <table id="tabela" align="center">
                    <tr>
                        <td><p>Nome:</p> <input type="text" name="nome" value="<?php echo $row['nome_usuario']?>" size="30"><br></td>
                    </tr>
                    <tr>
                        <td><p>E-mail:</p> <input type="email" name="email" value="<?php echo $row['email_usuario']?>"  size="30"><br></td>
                    </tr>
                    <tr>
                        <td><p>Telefone:</p> <input id="tel" type="text" name="tel" value="<?php echo $row['telefone_usuario']?>"  size="30" style="width: 15vh;"><br></td>
                    </tr>
                    <tr>
                        <td><p>Foto:</p> <input type="file" id="foto" name="foto" accept="image/*" />
                    </tr>
                    <tr>
                        <td><input id="botao" type="submit" value="Enviar"></td>
                    </tr>
                    <tr>
                        <input name="id_usuario" type="hidden" value="<?php echo $row['id_usuario']?>">
                    </tr>
                
                </table>
            </div>
        </form>
        
    </body>

</html>