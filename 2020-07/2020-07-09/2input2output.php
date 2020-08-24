<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="card">
            
                <div class="card-body">
                    <form class="form" method="post">
                    Input 1:<input class="form-control" type="text" name="inp1">
                    <br>
                    Input 2:<input class="form-control" type="text" name="inp2">
                    <br>
                    <button class="btn btn-primary btn-sm" type="submit" name="submit">Submit</button>
                    </form>
                </div>
                
                <div class="card-footer">
                    <?php
                    if (isset($_POST['submit'])) {
                        $inp1 = $_POST['inp1'];
                        $inp2 = $_POST['inp2'];
                        if (empty($inp1) || empty($inp2)) {
                            echo "<h1>Data Is missing </h1>";
                        } else {
                            echo "<h1> $inp1 $inp2 </h1>";
                        }
                    }
                    ?>
                </div>
        </div>
    </div>
    


    
</body>

</html>