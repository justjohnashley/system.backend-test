<?php
    //include 'includes/session.php';
    session_start();
    include 'db.php';

    if(isset($_POST['clip-add'])){
        $title = $_POST['title'];
        $category = $_POST['subject'];
        $newspaper = $_POST['newspaper'];
        $datepub = $_POST['datepub'];
        $content_files = [];
    
    
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
    
        $sql = "INSERT INTO clippings (title, category_id, newspaper, datepub, content) VALUES (?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sssss", $title, $category, $newspaper, $datepub, $content_files_json);
            if ($stmt->execute()) {
                $_SESSION['success'] = 'Clippings added successfully';
            } else {
                $_SESSION['error'] = 'SQL Error: ' . $stmt->error;
            }
            $stmt->close();
        } else {
            $_SESSION['error'] = "Prepare failed: (" . $con->errno . ") " . $con->error;
        }
        header('location: clippings.php');
    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
        header('location: clippings.php');
    }
?>