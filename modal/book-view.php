<?php
include 'db.php';

$sql = "SELECT id, content FROM book";
$query = $con->query($sql);

if ($query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        $bookId = $row['id'];
        $content_files = json_decode($row['content'], true);
        ?>

        <div class="modal fade" id="bmview<?php echo $bookId; ?>" tabindex="-1" role="dialog"
            aria-labelledby="viewModalLabel<?php echo $bookId; ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="viewModalLabel<?php echo $bookId; ?>">View</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                        if (!empty($content_files) && is_array($content_files)) {
                            foreach ($content_files as $file) {
                                if (!empty($file)) {
                                    $fileExtension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

                                    switch ($fileExtension) {
                                        case 'jpg':
                                        case 'jpeg':
                                        case 'png':
                                            echo '<img src="' . htmlspecialchars($file) . '" style="width: 100%; max-height: auto; object-fit: contain; margin-bottom: 10px; padding: 3%;">';
                                            break;

                                        case 'pdf':
                                            echo '<embed src="' . htmlspecialchars($file) . '" type="application/pdf" style="width:100%; height:500px; padding: 3%;" />';
                                            break;
                                    }

                                }
                            }
                        } else {
                            echo '<p>No content uploaded for this book.</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <?php
    }
} else {
    echo '<p>No books found in the database.</p>';
}
?>