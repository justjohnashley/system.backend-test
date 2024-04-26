<?php
require_once ('db.php');

$query = "SELECT book.title AS title, book.bcode AS code, COUNT(*) AS borrow_count
          FROM borrow LEFT JOIN book ON book.id = borrow.book_id GROUP BY book.id ORDER BY borrow_count DESC LIMIT 5";

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