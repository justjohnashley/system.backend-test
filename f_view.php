<?php
include 'db.php'; 

$fsId = isset($_POST['fsId']) ? $_POST['fsId'] : '';

if ($stmt = $conn->prepare("SELECT content FROM feasibility WHERE fsid = ?")) {
    $stmt->bind_param("i", $fsId); 
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
