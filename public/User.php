<?php
//each class has its own filename of the same name as the class


//they are both capitalized or StudlyCase 	
class User {
	public $username ="admin";
	public $password = "password";

	function isAdmin() {
		if($this->username == "admin") {
			return true;
		} else {
			return false;
		}
	}

	function attemptLogin($username, $password) {
		if($this->username == $username && $this->password == $password) {
			return true;
		} else {
			return false;
		}
	}
}