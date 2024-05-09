<?php
	//include 'includes/session.php';
	session_start();
	include 'db.php';


	if(isset($_POST['wb-edit'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$category = $_POST['type'];
		$author = $_POST['author'];

		$sql = "UPDATE workbook SET title = '$title', wb_type = '$category', author = '$author' WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Workbook updated successfully';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: workbook.php');

?>