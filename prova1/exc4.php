<?php

    if(empty($_POST['optSEX'])){
        $_POST['optSEX']="Sexo não expecificado";
    }
    
    $nome = $_POST['txtNome'];
    $cpf = $_POST['txtCpf'];
    $rg = $_POST['txtRg'];
    $estado = $_POST['selEstado'];
    $sexo = $_POST['optSEX'];
    $saldo = $_POST['txtSald'];
    $compra = $_POST['txtTotal'];
    $erro = 0;

    if(empty($saldo)){
        $txtSald=0;
    }
    if(empty($compra)){
        $txtSald=0;
    }

    echo "<h1>O EXERCÍCIO DEVE MOSTRAR OS DADOS CADASTRADOS ANTES DA VALIDAÇÃO</h1>";
    echo "Nome digitado: $nome <br>
         CPF digitado: $cpf <br>
         RG digitado: $rg <br>
         Sigla do estado: $estado <br>
         Sexo: $sexo <br>
         Saldo do cartão: $saldo <br>
         Valor da compra $compra <br>";

    if(empty($nome)){
        $erro=1;
        echo "<br>O nome não pode estar em branco. <br>";
    }
    if(empty($cpf)){
        $erro=1;
        echo "<br>O CPF não pode estar em branco. <br>";
    }
    if(empty($rg)){
        $erro=1;
        echo "<br>O RG não pode estar em branco. <br>";
    }
    if(empty($sexo)){
        echo "<br>O sexo deve ser selecionado. <br>";
    }

    if($erro==1){
        echo "<br><span style='color:red'>Preencha os dados corretamente! </span><br>";
    }
    else{
        if ($saldo < $compra){
            echo "<br><span style='color:red'> Saldo insificiente para concluir compra! </span>";
        }
        else{
            $newSald = 0;
            $newSald = $saldo - $compra;

            echo "<br>Novo saldo no cartão: $newSald";
        }
    }
?>