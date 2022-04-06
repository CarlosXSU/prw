<?php

    $palavras="     Roberto Carlos Lindee ";

    $palavras=trim($palavras);
    echo "A palavra ou frase na variável, excluindo espaços iniciais e finais é: ". $palavras. "<br>";
    echo "A palavra ou frase na variável, contém exatamente: ". strlen($palavras). " caracteres (contando os espaços entre as palavras)";

?>