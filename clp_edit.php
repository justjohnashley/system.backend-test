<?php
	//include 'includes/session.php';
	session_start();
	include 'db.php';


	if(isset($_POST['clip-edit'])){
        $id = $_POST['id'];
		$title = $_POST['title'];
		$category = $_POST['subject'];
		$newspaper = $_POST['newspaper'];
		$datepub = $_POST['datepub'];

		$sql = "UPDATE clippings SET title = '$title', category_id = '$category', newspaper = '$newspaper', datepub = '$datepub' WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Clippings updated successfully';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: clippings.php');

?>