<?php
	//include 'includes/session.php';
	include 'db.php';

	if(isset($_POST['book-add'])){
		$isbn = $_POST['isbn'];
		$title = $_POST['btitle'];
		$category = $_POST['slocation'];
		$author = $_POST['bauthor'];
		$crdate = $_POST['cdate'];
		$description = $_POST['desc'];
		$publisher = $_POST['pub'];
		$pubplace = $_POST['plpub'];
		$cover = $_POST['cover'];


		$sql = "INSERT INTO book (isbn, title, category_id, author, cryear, descr, publisher, placepub, cover) VALUES ('$isbn', '$title', '$category', '$author', '$crdate', '$description', '$publisher', '$pubplace', '$cover')";
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

	header('location: books-test.php');

?>