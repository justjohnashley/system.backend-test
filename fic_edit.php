<?php
	session_start();
	include 'db.php';


	if(isset($_POST['fiction-edit'])){
        $id = $_POST['id'];
		$isbn = $_POST['isbn'];
        $code = $_POST['code'];
		$title = $_POST['title'];
		$category = $_POST['slocation'];
		$author = $_POST['author'];
		$year = $_POST['year'];
		$description = $_POST['descr'];
		$publisher = $_POST['pub'];
		$pubplace = $_POST['plpub'];

		$sql = "UPDATE fiction SET isbn = '$isbn', code = '$code', title = '$title', category_id = '$category', author = '$author', year = '$year', descr = '$description', publisher = '$publisher', placepub = '$pubplace' WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Fiction updated successfully';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: fiction.php');

?>