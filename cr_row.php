<?php 
	//include 'includes/session.php';

	include 'db.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, book.id AS bookid, borrow.id AS itemid FROM borrow LEFT JOIN book ON book.id=borrow.book_id WHERE borrow.id = '$id'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>