<?php
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE = edge" http-equiv="X-UA-Compatible">
    <meta content="width = device-width, initial-scale = 1" name="viewport">

    <title>Footer</title>

    <!-- Bootstrap -->
    <link href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel=
    "stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- IE 9 -->

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
    </script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js">
    </script>

    <!-- Custom CSS -->

    <script>
    html, body {
    height: 100%;
    }

    #wrap {
    min-height: 100%;
    }

    #main {
    overflow:auto;
    padding-bottom:150px; /* this needs to be bigger than footer height*/
    }

    .footer {
    position: relative;
    margin-top: -150px; /* negative value of footer height */
    height: 150px;
    clear:both;
    padding-top:20px;
    }
    </script>
</head>

<body>
    <div id="wrap">
        <div class="container clear-top" id="main">
            <p>Copyright</p>
        </div>
    </div>


    <footer class="footer">
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
</body>
</html>
