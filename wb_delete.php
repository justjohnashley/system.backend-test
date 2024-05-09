<?php
session_start();
include 'db.php';

if(isset($_POST['wb-delete'])){
    $id = $_POST['id'];

    $sqlCount = "SELECT COUNT(*) AS count FROM workbook";
    $resultCount = mysqli_query($con, $sqlCount);
    $rowCount = mysqli_fetch_assoc($resultCount);
    $numRows = $rowCount['count']++;

    $sql = "DELETE FROM workbook WHERE id = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    if(mysqli_stmt_execute($stmt)){
        $sqlReset = "ALTER TABLE workbook AUTO_INCREMENT = " . $numRows;
        if (mysqli_query($con, $sqlReset)) {
            $_SESSION['success'] = 'Workbook deleted successfully';
        } else {
            $_SESSION['error'] = 'Error resetting auto-increment value: ' . mysqli_error($con);
        }
    }
    else{
        $_SESSION['error'] = 'Error deleting workbook: ' . mysqli_error($con);
    }
    mysqli_stmt_close($stmt);
}
else{
    $_SESSION['error'] = 'Select item to delete first';
}

header('location: workbook.php');

?>
