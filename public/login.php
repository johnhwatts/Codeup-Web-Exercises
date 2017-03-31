<?php

require_once '../Auth.php';
require_once '../Input.php';

session_start();

if (Input::has('username') && Input::has('password')) {
  Auth::attempt(Input::get('username'), Input::get('password'));
} 
if (Auth::check() == true) {
  header('Location: authorized.php');
  die;
}
?>


<!DOCTYPE html>

<html>
  <head>
      <title>Login</title>
  
      <!-- CSS -->
      <meta charset="UTF-8">
      <meta content="IE=edge" http-equiv="X-UA-Compatible">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
      
      <!-- latest compiled and minified CSS -->
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  
      <!-- custom CSS -->
  
      <style>
      h2 {
        text-align: center;
      }
  
      body {
        font-family: 'Lora', serif;
      }
  
      form {
        margin-top: 200px;
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
                  <form class="form-signin" id="login" method="post" name="login">
                      <h2 class="form-signin-heading">Please sign in</h2>
                      <label class="sr-only" for="inputUserName">Username</label>
                      <input autofocus="" class="form-control" id="inputUserName"
                      name="username" placeholder="Username" required="" type="text"> 
                      <label class="sr-only" for="inputPassword">Password</label> 
                      <input class="form-control" id="inputPassword" name="password"
                      placeholder="Password" required="" type="password">
                      <div class="checkbox">
                          <label><input type="checkbox" value="remember-me">Remember me</label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                  </form>
              </div>
          </div>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
