<?php
	//include 'includes/session.php';
    session_start();
    include 'db.php';

	if(isset($_POST['return'])){
		$id = $_POST['id'];
		$bid = $_POST['bid'];

		$sql = "UPDATE borrow SET status = 1 WHERE id = '$id';
            UPDATE book SET status = 0 WHERE id = '$bid';";
		if($con->multi_query($sql)){
			$_SESSION['success'] = 'Book returned successfully';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to return first';
	}

	header('location: circulation.php');
	
?>