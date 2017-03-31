<?php

require 'Log.php';

class Auth {

	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public static function attempt($username, $password) {
		$authLog = new Log();
        if ($username == 'guest' && password_verify($password, static::$password)) {
            $_SESSION['logged_in_user'] = $username;
            if (static::check() == true)  {
        		$authLog->logInfo("User " . $username . " logged in.");
            	header('Location: authorized.php');
            	die;
        	} 
        } else {
        	$authLog->logInfo("User " . $username . " failed to log in!");

        }
    } 


	public static function check() {
		if (isset($_SESSION['logged_in_user'])) {
			return true;
		} else {
			return false;
		}

	}

	public static function user() {
		if (Auth::check() == 'TRUE') {
			echo $_SESSION['logged_in_user'];
		}
	}

	public static function logout() {

	}
}