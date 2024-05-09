<?php 
	//include 'includes/session.php';

	include 'db.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, ebooks.id AS ebookid FROM ebooks LEFT JOIN ebook_category ON ebook_category.id=ebooks.category_id WHERE ebooks.id = '$id'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>