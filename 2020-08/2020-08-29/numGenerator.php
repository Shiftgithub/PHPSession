<?php
    echo "Start\n";
    for($i=0;$i<10000;$i++)
    {
        if($file=fopen("inputFile.txt", "a"));
        {
            $data = rand(1,50000)."\n";
            fwrite($file, $data);
            echo "$i\n";
        }   
    }
    echo "\nEnd";
     
?>