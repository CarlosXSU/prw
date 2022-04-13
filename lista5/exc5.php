<?php 

    $text = $_POST['txtArea'];
    $palavras = explode(" ", $text);

    for ($i=0; $i<count($palavras); $i++){

        echo "<table border='1'>
            <tr>
                <td> $i </td>
                <td> $palavras[$i] </td>
            </tr></table>";
    }

    echo "<br><br>";

    sort($palavras);
    for ($i=0; $i<count($palavras); $i++){

        echo "<table border='1'>
            <tr>
                <td> $i </td>
                <td> $palavras[$i] </td>
            </tr></table>";

    }

    echo "<br><br>";

    for ($i=0; $i<count($palavras); $i++){

        echo "<table border='1'>
            <tr>
                <td> $i </td>
                <td> ".strtoupper($palavras[$i]). " </td>
            </tr></table>";

    }


?> 