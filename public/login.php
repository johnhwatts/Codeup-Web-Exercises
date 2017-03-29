<?php
  session_start();

  // var_dump($_POST);
  // var_dump($_SESSION);

  $message = "";
  // check if the form was submitted

  if(!empty($_POST)) {
    $username = isset($_POST['username']) ? htmlspecialchars(strip_tags($_POST['username'])) : "";
    $password = isset($_POST['password']) ? htmlspecialchars(strip_tags($_POST['password'])) : "";

    if($username == "admin" && $password == "pass") {
      $_SESSION['logged_in_user'] = $_POST['username'];
        header("Location: /authorized.php");
        } else {
          print ("Please retry your username or password");
      }
  }
?>


<!DOCTYPE html>

<html>
<head>
    <title>Login</title><!-- CSS -->
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel=
    "stylesheet"><!-- latest compiled and minified CSS -->
    <link href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    rel="stylesheet"><!-- custom CSS -->
    <link href="/css/counter.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <form class="form-signin" id="login" method="post" name=
                "login">
                    <h2 class="form-signin-heading">Please sign in</h2>
                    <label class="sr-only" for="inputUserName">Username</label>
                    <input autofocus="" class="form-control" id="inputUserName"
                    name="username" placeholder="Username" required="" type=
                    "text"> <label class="sr-only" for=
                    "inputPassword">Password</label> <input class=
                    "form-control" id="inputPassword" name="password"
                    placeholder="Password" required="" type="password">

                    <div class="checkbox">
                        <label><input type="checkbox" value="remember-me">
                        Remember me</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type=
                    "submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
