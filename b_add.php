<?php
	//include 'includes/session.php';
	include 'db.php';

	if(isset($_POST['book-add'])){
		$isbn = $_POST['isbn'];
		$title = $_POST['btitle'];
		$category = $_POST['slocation'];
		$code = $_POST['bcode'];
		$author = $_POST['bauthor'];
		$crdate = $_POST['cdate'];
		$description = $_POST['desc'];
		$publisher = $_POST['pub'];
		$pubplace = $_POST['plpub'];


		$sql = "INSERT INTO book (isbn, title, category_id, bcode, author, cryear, descr, publisher, placepub) VALUES ('$isbn', '$title', '$category', '$code', '$author', '$crdate', '$description', '$publisher', '$pubplace')";
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

	header('location: books.php');

?>