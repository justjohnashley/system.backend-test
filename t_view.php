<?php
include 'db.php'; 

$thId = isset($_POST['thId']) ? $_POST['thId'] : '';

if ($stmt = $conn->prepare("SELECT content FROM thesis WHERE thid = ?")) {
    $stmt->bind_param("i", $thId); 
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
