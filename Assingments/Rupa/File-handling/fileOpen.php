<?php
    $username = "1234";
    $file = fopen("$username.txt", "r");
    echo "Hello";
    fread($file, filesize("$username.txt"));

    fclose($file);
?>