<?php
	require_once "User.php";

	$admin = new User();
	$admin->username = "admin";
	$admin->password = "supersecure";

	$guest = new User();
	$guest->username = "Roger";
	$guest->password = "Ilovethegoldengirls";

	if($guest->isAdmin()) {
		echo "Your guest can edit stuff";
	} else {
		echo "The guest can't edit stuff";
	}

	if($admin->isAdmin()) {
		echo "The admin can edit stuff";
	} 

	// $guest = new User();
	// $guest->username = "guest";

	// var_dump($admin);

	// var_dump($guest);

?>

