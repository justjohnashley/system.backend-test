<?php
session_start();
include 'db.php';

if(isset($_POST['caps-delete'])){
    $id = $_POST['id'];

    $sqlCount = "SELECT COUNT(*) AS count FROM capstone";
    $resultCount = mysqli_query($con, $sqlCount);
    $rowCount = mysqli_fetch_assoc($resultCount);
    $numRows = $rowCount['count']++;

    $sql = "DELETE FROM capstone WHERE id = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    if(mysqli_stmt_execute($stmt)){
        $sqlReset = "ALTER TABLE capstone AUTO_INCREMENT = " . $numRows;
        if (mysqli_query($con, $sqlReset)) {
            $_SESSION['success'] = 'Capstone deleted successfully';
        } else {
            $_SESSION['error'] = 'Error resetting auto-increment value: ' . mysqli_error($con);
        }
    }
    else{
        $_SESSION['error'] = 'Error deleting capstone: ' . mysqli_error($con);
    }
    mysqli_stmt_close($stmt);
}
else{
    $_SESSION['error'] = 'Select item to delete first';
}

header('location: capstone.php');

?>
