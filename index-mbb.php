<?php
require_once ('db.php');

$firstDayOfMonth = date('Y-m-01');

$lastDayOfMonth = date('Y-m-t');

$query = "SELECT book.title AS title, book.bcode AS code, COUNT(*) AS borrow_count
          FROM borrow
          LEFT JOIN book ON book.id = borrow.book_id
          WHERE DATE(borrow.date_borrow) BETWEEN '$firstDayOfMonth' AND '$lastDayOfMonth'
          GROUP BY book.id ORDER BY borrow_count DESC LIMIT 3";

$result = mysqli_query($con, $query);
?>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $row['code']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['borrow_count']; ?></td>
    </tr>
    <?php
}
?>
