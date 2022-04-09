<?php

    $link= "rb.ude.psfi.www";
    
    echo "Link não funcional: ". $link. "<br>";
    echo "Link funcional (inverso): <a href='https://".strrev($link)."'>".strrev($link)."</a>";
    
?>