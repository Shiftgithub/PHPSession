<?php
    $username = "1234";
    $file = fopen("$username.txt", "r") or die("Unable to open file!");
    
    echo fread($file, filesize("$username.txt"));

    fclose($file);
?>