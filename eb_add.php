<?php
    session_start();
    include 'db.php';

    if(isset($_POST['ebook-add'])){
        $isbn = $_POST['isbn'];
        $title = $_POST['title'];
        $subj = $_POST['subject'];
        $category = $_POST['slocation'];
        $author = $_POST['author'];
        $crdate = $_POST['cdate'];
        $description = $_POST['descr'];
        $publisher = $_POST['pub'];
        $pubplace = $_POST['plpub'];
        $ebook_cover_path = '';
        $content_files = [];
    
        if ($_FILES['ebook_cover']['error'] == 0) {
            $target_directory = "uploads/";
            $target_file = $target_directory . basename($_FILES['ebook_cover']['name']);
    
            if (!file_exists($target_file)) {
                if (move_uploaded_file($_FILES['ebook_cover']['tmp_name'], $target_file)) {
                    $ebook_cover_path= $target_file;
                    $_SESSION['success'] = 'File uploaded successfully';
                } else {
                    $_SESSION['error'] = 'Error uploading your file.';
                }
            } else {
                $_SESSION['error'] = 'File already exists.';
            }
        } else {
            $_SESSION['error'] = 'Error in uploading file: ' . $_FILES['ebook_cover']['error'];
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
    
        $sql = "INSERT INTO ebooks (isbn, title, subj, category_id, author, cryear, descr, publisher, placepub, ebook_cover, content, date_added) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $con->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sssssssssss", $isbn, $title, $subj, $category, $author, $crdate, $description, $publisher, $pubplace, $ebook_cover_path, $content_files_json);
            if ($stmt->execute()) {
                $_SESSION['success'] = 'eBooks added successfully';
            } else {
                $_SESSION['error'] = 'SQL Error: ' . $stmt->error;
            }
            $stmt->close();
        } else {
            $_SESSION['error'] = "Prepare failed: (" . $con->errno . ") " . $con->error;
        }
        header('location: eBooks.php');
    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
        header('location: eBooks.php');
    }
?>