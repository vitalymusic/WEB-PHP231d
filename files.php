<?php
    ini_set('display_errors', 1);
    $file = fopen("text2","w+");

    fwrite($file,"New text");


    fclose($file);

?>