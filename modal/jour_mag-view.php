<?php
include 'db.php';

$sql = "SELECT id, link FROM ejournal_emagazine";  // Only select 'id' and 'link'
$query = $con->query($sql);

if ($query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        $jmId = $row['id'];
        $link = $row['link'];  // Fetch the link directly from the row

        ?>
        <div class="modal fade" id="jm_view<?php echo $jmId; ?>" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel<?php echo $jmId; ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="viewModalLabel<?php echo $jmId; ?>">View</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Display the link -->
                        <p><a href="<?php echo htmlspecialchars($link); ?>" target="_blank">Link</a></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo '<p>No eJournals & eMagazines found in the database.</p>';
}
?>
