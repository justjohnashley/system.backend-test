<?php
include 'db.php';

$sql = "SELECT DATE(date_added) AS added_date, COUNT(*) AS th_count, GROUP_CONCAT(title SEPARATOR '<br>') AS title
        FROM workbook
        GROUP BY DATE(date_added)";

$result = $con->query($sql); ?>

<?php
if ($result->num_rows > 0) {
    ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Date Added</th>
                <th>Number of Workbook</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            <?php

            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo date('M d, Y', strtotime($row["added_date"])); ?></td>
                    <td><?php echo $row["th_count"]; ?></td>
                    <td><?php echo $row["title"]; ?></td>
                </tr>
                <?php
            }
}
?>
    </tbody>
</table>