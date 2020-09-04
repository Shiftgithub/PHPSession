<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $P = $_POST;
    if (isset($P['id']) && isset($P['name']) && isset($P['email']) && isset($P['num']) && isset($P['add'])) {
        $id = test_input($P['id']);
        $name = test_input($P['name']);
        $email = test_input($P['email']);
        $num = test_input($P['num']);
        $add = test_input($P['add']);

        if ($file = fopen("dataZone/".$id.".txt", "w")) {
            $store = '<table class="table table-inverse table-responsive table-hover">
            <thead class="thead-inverse">
                <tr>
                    <th>Id:</th>
                    <th>'.$id.'</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">Name:</td>
                    <td>'.$name.'</td>
                </tr>
                <tr>
                    <td scope="row">Email:</td>
                    <td>'. $email.'</td>
                </tr>
                <tr>
                    <td scope="row">Number:</td>
                    <td>'.$num.'</td>
                </tr>
                <tr>
                    <td scope="row">Address:</td>
                    <td>'.$add.'</td>
                </tr>
            </tbody>
            </table>';

            if (fwrite($file, $store)) {
                $color = "primary";
                $alert = "Data Inserted";
            }
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $G = $_GET;
    if (isset($G['studid'])) {
        $studid = $G['studid'];


        if ($file = fopen("dataZone/".$studid.".txt","r")) 
        {
            $store = fread($file, filesize("dataZone/".$studid.".txt"));
        } else 
        {
            
            echo "Data Not Found";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Data Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="<?= empty($color) ? "" : $color ?>"><?= empty($alert) ? "" : $alert ?></div>

        <?= empty($store)? "": $store?>
        
        <a class="btn btn-primary" href="inputForm.php" role="button">Back to Information Form</a>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>