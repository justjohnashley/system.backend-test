<?php
	//include 'includes/session.php';
	session_start();
	include 'db.php';


	if(isset($_POST['cap-edit'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$category = $_POST['type'];
		$code = $_POST['code'];
		$author = $_POST['author'];
		$upyear = $_POST['upyr'];

		$sql = "UPDATE capstone SET code = '$code', title = '$title', cap_type = '$category', author = '$author', upyear = '$upyear' WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Capstone updated successfully';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: capstone.php');

?>