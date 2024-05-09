<?php
include 'db.php'; 

$nrId = isset($_POST['nrId']) ? $_POST['nrId'] : '';

if ($stmt = $conn->prepare("SELECT content FROM nreport WHERE fsid = ?")) {
    $stmt->bind_param("i", $nrId); 
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
