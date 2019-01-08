<?php
	function get_all_data(){
		include 'connection.php';

		$stmt = $con->prepare("SELECT * FROM date_range");
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $stmt->rowCount();
	}
?>