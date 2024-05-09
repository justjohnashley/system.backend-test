<?php 

	include 'db.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, nreport.id AS nrid FROM nreport LEFT JOIN nr_category ON nr_category.id=nreport.nr_type WHERE nreport.id = '$id'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>