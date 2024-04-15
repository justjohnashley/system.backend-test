<?php
	//include 'includes/session.php';
    include 'db.php';

	if(isset($_POST['cap-delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM capstone WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Book deleted successfully';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: capstone.php');
	
?>