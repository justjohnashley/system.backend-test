<?php
	//include 'includes/session.php';
	session_start();
	include 'db.php';


	if(isset($_POST['book-edit'])){
        $id = $_POST['id'];
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$subj = $_POST['subject'];
		$category = $_POST['slocation'];
		$code = $_POST['code'];
		$author = $_POST['author'];
		$crdate = $_POST['cdate'];
		$description = $_POST['desc'];
		$publisher = $_POST['pub'];
		$pubplace = $_POST['plpub'];

		$sql = "UPDATE book SET isbn = '$isbn', title = '$title', subj = '$subj', category_id = '$category', bcode = '$code', author = '$author', cryear = '$crdate', descr = '$description', publisher = '$publisher', placepub = '$pubplace' WHERE id = '$id'";
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

	header('location:books.php');

?>