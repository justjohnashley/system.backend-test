<?php 
	//include 'includes/session.php';

	include 'db.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, thesis.id AS thid FROM thesis LEFT JOIN th_category ON th_category.id=thesis.th_type WHERE thesis.id = '$id'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>