<?php
	session_start();
	include 'db.php';


	if(isset($_POST['jour_mag-edit'])){
        $id = $_POST['id'];
		$title = $_POST['title'];
		$volumeno = $_POST['volumeno'];
		$link = $_POST['link'];
		$year = $_POST['year'];

		$sql = "UPDATE ejournal_emagazine SET title = '$title', volumeno = '$volumeno', link = '$link', year = '$year' WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'eJournal & eMagazine updated successfully';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: ej_em.php');

?>