 <?php

          if (isset($_POST['search']) && isset($_POST['info'])) {
            $info = $_POST['info'];
            //die($info);
         $file = fopen("$info".".txt","r");
        echo fread($file,filesize("$info.txt"));
       fclose($file);
      }
?>