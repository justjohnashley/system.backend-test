<?php
include 'db.php';

$sql = "SELECT DATE(date_added) AS added_date, COUNT(*) AS fs_count, GROUP_CONCAT(code SEPARATOR '<br>') AS call_number
        FROM feasibility
        GROUP BY DATE(date_added)";

$result = $con->query($sql); ?>

<?php
if ($result->num_rows > 0) {
    ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Date Added</th>
                <th>Number of Feasibility Study</th>
                <th>Call Number</th>
            </tr>
        </thead>
        <tbody>
            <?php

            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo date('M d, Y', strtotime($row["added_date"])); ?></td>
                    <td><?php echo $row["fs_count"]; ?></td>
                    <td><?php echo $row["call_number"]; ?></td>
                </tr>
                <?php
            }
} else {
    echo "<p>No items found in the database.</p>";
}
?>
    </tbody>
</table>