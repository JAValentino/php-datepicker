<?php
	include 'connection.php';
	include 'function.php';

	$columns = array();
	$query = "SELECT * FROM date_range WHERE ";

	 if($_POST["date_search"] == "yes"){
		$start_date = $_POST["start_date"];
		$end_date = $_POST["end_date"];
		$query .= 'order_date BETWEEN "'.$start_date.'" AND "'.$end_date.'" AND';
	}
	if(isset($_POST["search"]["value"])){
		$query .= '(order_id LIKE "%'.$_POST["search"]["value"].'%" OR order_customer LIKE "%'.$_POST["search"]["value"].'%" 
		OR order_item LIKE "%'.$_POST["search"]["value"].'%" OR order_value LIKE "%'.$_POST["search"]["value"].'%")';
	}
	if(isset($_POST["order"])){
		$query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
	} else{
		$query .= 'ORDER BY order_id ASC ';
	}

	if($_POST["length"] != -1){
		$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
	}

	$stmt = $con->prepare($query);
	$stmt->execute();
	$result = $stmt->fetchAll();
	$data = array();
	$filtered_rows = $stmt->rowCount();
	foreach ($result as $row) {
		$sub_array = array();
		$sub_array[] = $row["order_id"];
		$sub_array[] = $row["order_customer"];
		$sub_array[] = $row["order_item"];
		$sub_array[] = $row["order_value"];
		$sub_array[] = $row["order_date"];

		$data[] = $sub_array;
	}
	$output = array(
		"draw" => intval($_POST["draw"]),
		"recordsTotal" => get_all_data(),
		"recordsFiltered" => $filtered_rows,
		"data" => $data
	);
	echo json_encode($output);
?>