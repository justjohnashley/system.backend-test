<?php 
	//include 'includes/session.php';

	include 'db.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, fiction.id AS ficid FROM fiction LEFT JOIN fiction_category ON fiction_category.id=fiction.category_id WHERE fiction.id = '$id'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>