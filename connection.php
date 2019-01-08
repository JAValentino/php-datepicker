<?php
	$username = "root";
	$password = "";

	try {
		$con = new PDO('mysql:host=localhost;dbname=date_picker', $username,$password);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>