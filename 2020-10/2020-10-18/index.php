<?php
session_start();

$_SESSION['msg']='This is a sission Msg';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>This Is Index pAge</h1>
    Here I fixed the Session;
    <a href="session.php">Session</a>
</body>
</html>