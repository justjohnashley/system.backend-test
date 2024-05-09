<?php
	session_start();
	include 'db.php';


	if(isset($_POST['nr-edit'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$category = $_POST['type'];
		$code = $_POST['code'];
		$author = $_POST['author'];
		$upyear = $_POST['upyr'];

		$sql = "UPDATE nreport SET code = '$code', title = '$title', nr_type = '$category', author = '$author', upyear = '$upyear' WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Report updated successfully';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: narrative-report.php');

?>