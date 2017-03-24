<?php

//Create an array of your favorite things.

$myFavThings = ['food', 'beer', 'cycling', 'fishing', 'music'];

?>

<!--  loop through this array and display each element inside your HTML.
Use an HTML table for this display.
Use CSS to add a light gray background on every other row for a nice effect. -->

<!DOCTYPE html>

<html>
<head>
    <title>My Favorite Things</title>
	
	<!-- CSS -->
	<meta charset="UTF-8"><!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"><!-- latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"><!-- custom CSS -->
	<link rel="stylesheet" type="text/css" href="/css/my-favorite-things.css"> 

</head>

<body>
    <h1>These are a few of my favorite things</h1> 
    <div class = table-responsive>
     <table class = "table table-striped Aligner">
     	<tr>
     		<th>The Things</th>
     	</tr>
     	
    	<?php foreach ($myFavThings as $myFavThing) { ?>
    	    <tr><td><?= $myFavThing; ?></td></tr>
    	<?php endforeach; ?>
    	
    </table>
    </div>
</body> 		
</html>

