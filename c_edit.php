<?php
	//include 'includes/session.php';
	include 'db.php';


	if(isset($_POST['cap-edit'])){
		$title = $_POST['cptitle'];
		$category = $_POST['type'];
		$code = $_POST['cpcode'];
		$author = $_POST['cauthor'];
		$upyear = $_POST['upyr'];
		$description = $_POST['desc'];

		$sql = "UPDATE capstone SET code = '$code', title = '$title', cap_type = '$category', author = '$author', descr = '$description', WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Book updated successfully';
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