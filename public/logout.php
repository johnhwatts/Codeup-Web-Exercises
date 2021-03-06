<?php

session_start();

session_destroy();

?>

<!DOCTYPE html>

<html>
<head>
    <title>Logout</title>

    <!-- CSS -->
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <!-- latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- custom CSS -->

    <style>
    body {
      font-family: 'Lora', serif;
    }

    .message {
      margin-top: 200px;
      text-align: center;
    }

    </style>
</head>

<body>
    <?php
      require 'navbar.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="message">You have logged out successfully</h1>
            </div>
        </div>


        <div class="row">
            <div class="text-center">
                <a class="btn btn-primary" href=
                "/login.php?action=login">Return to Login page</a>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
