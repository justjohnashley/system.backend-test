<?php 
	//include 'includes/session.php';

	include 'db.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, clippings.id AS clipid FROM clippings LEFT JOIN clippings_category ON clippings_category.id=clippings.category_id WHERE clippings.id = '$id'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>