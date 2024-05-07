<?php
include 'db.php'; 

$capId = isset($_POST['capId']) ? $_POST['capId'] : '';

if ($stmt = $conn->prepare("SELECT content FROM capstone WHERE capid = ?")) {
    $stmt->bind_param("i", $capId); 
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
