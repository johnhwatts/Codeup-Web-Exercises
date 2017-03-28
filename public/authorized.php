<?php
session_start();
// var_dump($_SESSION);

     if(!isset($_SESSION['logged_in_user'])) // If session is not set then redirect to Login Page
{
   header("Location: /login.php");
}

  echo $_SESSION['logged_in_user'] . PHP_EOL;

  echo "Login Success" . PHP_EOL;

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Authorized</title>
        <!-- CSS -->
    <meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"><!-- latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"><!-- custom CSS -->
    <link rel="stylesheet" type="text/css" href="/css/counter.css">
    </head>
    <body>
        <h1>Authorized</h1>
        <a href="/logout.php?action=logout" class="btn btn-primary">Logout</a>

    </body>
</html>
