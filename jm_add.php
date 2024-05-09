<?php
    session_start();
    include 'db.php';

    if(isset($_POST['jour_mag-add'])){
        $title = $_POST['title'];
        $volumeno = $_POST['volumeno'];
        $link = $_POST['link'];
        $year = $_POST['year'];
        $jm_cover_path = '';
    
        if ($_FILES['jm_cover']['error'] == 0) {
            $target_directory = "uploads/";
            $target_file = $target_directory . basename($_FILES['jm_cover']['name']);
    
            if (!file_exists($target_file)) {
                if (move_uploaded_file($_FILES['jm_cover']['tmp_name'], $target_file)) {
                    $jm_cover_path= $target_file;
                    $_SESSION['success'] = 'File uploaded successfully';
                } else {
                    $_SESSION['error'] = 'Error uploading your file.';
                }
            } else {
                $_SESSION['error'] = 'File already exists.';
            }
        } else {
            $_SESSION['error'] = 'Error in uploading file: ' . $_FILES['jm_cover']['error'];
        }
    
       
    
        $sql = "INSERT INTO ejournal_emagazine (title, volumeno, link, year, jm_cover, date_added) VALUES (?, ?, ?, ?, ?, NOW())";
        $stmt = $con->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sssss",$title, $volumeno, $link, $year, $jm_cover_path);
            if ($stmt->execute()) {
                $_SESSION['success'] = 'eJournal & eMagazine added successfully';
            } else {
                $_SESSION['error'] = 'SQL Error: ' . $stmt->error;
            }
            $stmt->close();
        } else {
            $_SESSION['error'] = "Prepare failed: (" . $con->errno . ") " . $con->error;
        }
        header('location: ej_em.php');
    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
        header('location: ej_em.php');
    }
?>