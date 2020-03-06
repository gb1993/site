<?php
    if(!is_dir($nome)){
        mkdir ("./temp/$nome", 0700);
    } else { 
        echo "foi nao";
    }
?>