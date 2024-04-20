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
		$description = $_POST['desc'];


		$sql = "INSERT INTO capstone (cap_type, upyear, title, code, author, descr) VALUES ('$category', '$upyear', '$title', '$code', '$author', '$description')";
		if($con->query($sql)){
			$_SESSION['success'] = 'Book added successfully';
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