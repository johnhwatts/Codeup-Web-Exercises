<?php

// Require or include statements are allowed here. All other code goes in the pageController function.

/**
 * The pageController function handles all processing for this page.
 * @return array An associative array of data to be used in rendering the html view.
 */
function pageController()
{
    if (! isset($_GET['counter'])) {
		$_GET['counter'] = 0;
	}
	return $_GET;
}

// Call the pageController function and extract all the returned array as local variables.
extract(pageController());

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Counter</title>
        <!-- CSS -->
	<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"><!-- latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"><!-- custom CSS -->
	<link rel="stylesheet" type="text/css" href="/css/counter.css"> 
    </head>
    <body>
    	<!-- current counter value -->
    	<h1><?= $counter ?></h1>
    	<br>
    	<div class=Aligner>
    		<!-- Link to click to make counter go up -->
    		<button><a href="/php/counter.php?counter=<?= $counter + 1; ?>">UP</a></button>
    	</div>
    	<div class=Aligner>
    		<!-- Link to click to make counter go down -->
    		<button><a href="/php/counter.php?counter=<?= $counter - 1; ?>">DOWN</a></button>
    	</div>
    </body>
</html>