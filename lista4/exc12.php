<?php
 
    $pasta = $_POST['selPas'];
    $img = $_POST['selImg'];

    for ($i=1;$i<=$img;$i++){
        echo "Imagem $i: <br> <img src='$pasta/$i.jpg' width='150' height='100'><br>";
    }

?>