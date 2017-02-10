<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Real Estate Search Form</title>
        </head>
        <body>
            <h1>Find your new property today!</h1>
       
            <form action="http://http://www.trulia.com/search" method="GET">
                    <label for="search"> Search Redfin </label>
                    <input id="search" name="search" type="text">
                    <button type="submit">Search Redfin now!</button>
            </form>
                
    

        </body>
    </html>