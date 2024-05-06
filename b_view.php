<?php
include 'db.php'; 

$bookId = isset($_POST['bookId']) ? $_POST['bookId'] : '';

if ($stmt = $conn->prepare("SELECT content FROM book WHERE bookid = ?")) {
    $stmt->bind_param("i", $bookId); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row['content'];
        }
    } else {
        echo "No content available.";
    }

    $stmt->close();
} else {
    echo "Error preparing statement: " . $con->error;
}

$con->close();
?>
