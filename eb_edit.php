<?php
	session_start();
	include 'db.php';


	if(isset($_POST['ebook-edit'])){
        $id = $_POST['id'];
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$subj = $_POST['subject'];
		$category = $_POST['slocation'];
		$author = $_POST['author'];
		$crdate = $_POST['cdate'];
		$description = $_POST['descr'];
		$publisher = $_POST['pub'];
		$pubplace = $_POST['plpub'];

		$sql = "UPDATE ebooks SET isbn = '$isbn', title = '$title', subj = '$subj', category_id = '$category', author = '$author', cryear = '$crdate', descr = '$description', publisher = '$publisher', placepub = '$pubplace' WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'eBook updated successfully';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: eBooks.php');

?>