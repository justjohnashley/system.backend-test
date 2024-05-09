<?php
	session_start();
	include 'db.php';

	if(isset($_POST['th-add'])){
		$title = $_POST['title'];
		$category = $_POST['type'];
		$code = $_POST['code'];
		$author = $_POST['author'];
		$upyear = $_POST['upyr'];
		$th_cover_path = '';
        $content_files = [];
    
        if ($_FILES['th_cover']['error'] == 0) {
            $target_directory = "uploads/";
            $target_file = $target_directory . basename($_FILES['th_cover']['name']);
    
            if (!file_exists($target_file)) {
                if (move_uploaded_file($_FILES['th_cover']['tmp_name'], $target_file)) {
                    $th_cover_path = $target_file;
                    $_SESSION['success'] = 'File uploaded successfully';
                } else {
                    $_SESSION['error'] = 'Error uploading your file.';
                }
            } else {
                $_SESSION['error'] = 'File already exists.';
            }
        } else {
            $_SESSION['error'] = 'Error in uploading file: ' . $_FILES['th_cover']['error'];
        }
    
        if (!empty($_FILES['content']['name'][0])) {
            $target_directory = "contents/";
    
            foreach ($_FILES['content']['tmp_name'] as $key => $tmp_name) {
                $file_name = basename($_FILES['content']['name'][$key]);
                $target_file = $target_directory . $file_name;
        
                if (move_uploaded_file($tmp_name, $target_file)) {
                    $content_files[] = $target_file;
                } else {
                    $_SESSION['error'] = "Failed to move file: $file_name";
                }
            }
        }
    
        $content_files_json = json_encode($content_files);
    
        $sql = "INSERT INTO thesis (th_type, upyear, title, code, author, th_cover, content, date_added) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $con->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sssssss", $category, $upyear, $title, $code, $author, $th_cover_path, $content_files_json);
            if ($stmt->execute()) {
                $_SESSION['success'] = 'Thesis added successfully';
            } else {
                $_SESSION['error'] = 'SQL Error: ' . $stmt->error;
            }
            $stmt->close();
        } else {
            $_SESSION['error'] = "Prepare failed: (" . $con->errno . ") " . $con->error;
        }
        header('location: thesis.php');
    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
        header('location: thesis.php');
    }
?>
