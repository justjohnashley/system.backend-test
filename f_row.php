<?php 
	//include 'includes/session.php';

	include 'db.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, feasibility.id AS fsid FROM feasibility LEFT JOIN fs_category ON fs_category.id=feasibility.fs_type WHERE feasibility.id = '$id'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>