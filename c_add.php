<?php
	//include 'includes/session.php';
	session_start();
	include 'db.php';

	if(isset($_POST['cap-add'])){
		$title = $_POST['cptitle'];
		$category = $_POST['type'];
		$code = $_POST['cpcode'];
		$author = $_POST['cauthor'];
		$upyear = $_POST['upyr'];


		$sql = "INSERT INTO capstone (cap_type, upyear, title, code, author, date_added) VALUES ('$category', '$upyear', '$title', '$code', '$author', NOW())";
		if($con->query($sql)){
			$_SESSION['success'] = 'Capstone added successfully';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: capstone.php');

?>