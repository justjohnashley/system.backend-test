<?php
    session_start();
    include 'db.php';

    if(isset($_POST['fiction-add'])){
        $isbn = $_POST['isbn'];
        $title = $_POST['title'];
        $code = $_POST['code'];
        $category = $_POST['slocation'];
        $author = $_POST['author'];
        $year = $_POST['year'];
        $description = $_POST['descr'];
        $publisher = $_POST['pub'];
        $pubplace = $_POST['plpub'];
        $fic_cover_path = '';
        $content_files = [];
    
        if ($_FILES['fiction_cover']['error'] == 0) {
            $target_directory = "uploads/";
            $target_file = $target_directory . basename($_FILES['fiction_cover']['name']);
    
            if (!file_exists($target_file)) {
                if (move_uploaded_file($_FILES['fiction_cover']['tmp_name'], $target_file)) {
                    $fic_cover_path= $target_file;
                    $_SESSION['success'] = 'File uploaded successfully';
                } else {
                    $_SESSION['error'] = 'Error uploading your file.';
                }
            } else {
                $_SESSION['error'] = 'File already exists.';
            }
        } else {
            $_SESSION['error'] = 'Error in uploading file: ' . $_FILES['fiction_cover']['error'];
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
    
        $sql = "INSERT INTO fiction (isbn, title, code, category_id, author, year, descr, publisher, placepub, fiction_cover, content, date_added) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $con->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sssssssssss", $isbn, $title, $code, $category, $author, $year, $description, $publisher, $pubplace, $fic_cover_path, $content_files_json);
            if ($stmt->execute()) {
                $_SESSION['success'] = 'Fiction added successfully';
            } else {
                $_SESSION['error'] = 'SQL Error: ' . $stmt->error;
            }
            $stmt->close();
        } else {
            $_SESSION['error'] = "Prepare failed: (" . $con->errno . ") " . $con->error;
        }
        header('location: fiction.php');
    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
        header('location: fiction.php');
    }
?>