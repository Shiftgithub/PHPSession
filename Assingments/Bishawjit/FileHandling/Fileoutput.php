<!DOCTYPE html>
  <head>
    <title>result</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
       <?php

        //$search = $_POST['search'];

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 
                  $name = $_POST['name'];
                  $roll = $_POST['roll'];
                  $sub = $_POST['sub'];
                  

                  if (isset($_POST['save'])) {
                    echo "$name <br>";
                    echo "$roll <br>";
                    echo "$sub <br>";
                  }
                  $myfile = fopen("$name.txt", "w") or die("Unable to open file!");
                  fwrite($myfile, "$name  $roll  $sub");
                  fclose($myfile);
            
          }
            //Storing data
            //extract($_REQUEST);

            // if($file=fopen("save_information.txt", "a"));
            //   {
            //     fwrite($file, "Name :");
            //     fwrite($file, $name ."\n");
            //     fwrite($file, "Roll :");
            //     fwrite($file, $roll ."\n");
            //     fwrite($file, "Subject :");
            //     fwrite($file, $sub ."\n");
            //     fclose($file);
            //   }
              //It will show full data of a text file
              //echo file_get_contents("save information.txt");

       ?>

        <!-- back to previous page Button -->
        <a href="http://localhost/FileHandling/Fileinput.php">
           <button type="submit">HOME</button>
        </a><br>
       
      
  </body>
</html>