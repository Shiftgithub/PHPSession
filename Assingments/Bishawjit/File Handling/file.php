<?php
 $myfile = fopen("testfile.txt", "w");
 $txt = "I am Joy. I am doing file handling for the first time.";
 fwrite($myfile, $txt);
 fclose($myfile);
?>