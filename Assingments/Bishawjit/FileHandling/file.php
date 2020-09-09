<?php
 $myfile = fopen("testfile.txt", "w");
 $txt = "I am Joy. I am doing file handling for the first time. 
        Why Bro ???";

    if(fwrite($myfile, $txt)){
        echo "File Created";
    }
    else {
        echo "File not Created";
    }
 
 fclose($myfile);
?>