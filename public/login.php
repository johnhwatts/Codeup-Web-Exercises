<?php

// var_dump($_POST);


function pageController() {
    $data = [];
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    //if a value exists, get that value and assign to variable, else assign default value
    if (! empty($_POST['username']) && ! empty($_POST['password'])) {
        if ($username == 'guest' && $password == 'password') {
        header("Location: http://codeup.dev/authorized.php");
        } else {
        echo "Login Failed";
        }
    }
    return $data;
}
extract(pageController());

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <!-- CSS -->
	<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"><!-- latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"><!-- custom CSS -->
	<link rel="stylesheet" type="text/css" href="/css/counter.css"> 
    </head>
    <body>
        <form name="login" method="POST">
            Username<input type="text" name="username"/>
            Password<input type="password" name="password"/>
            <input type="submit"/>
        </form>
    	
    </body>
</html>