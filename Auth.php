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
        	$authLog->logError("User " . $username . " failed to log in!");

        }
    }


	public static function check() {
		return isset($_SESSION['logged_in_user']);

	}

	public static function user() {
		if (static::check() == 'TRUE') {
			return $_SESSION['logged_in_user'];
		}
	}

	public static function logout() {

	}
}
