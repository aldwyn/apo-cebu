<?php
	include('../apps/sql-connect.php');
	header('Content-Type: application/json');
	
	$q_val = $_GET['q_val'];

	$suggestions = mysql_query("SELECT name AS val FROM chapters WHERE name LIKE '%$q_val%' LIMIT 5");
	
	$names = array();
	while ($name = mysql_fetch_assoc($suggestions)) {
		array_push($names, $name);
	}

	echo json_encode($names);
?>