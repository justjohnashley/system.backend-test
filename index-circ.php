
<?php
require_once ('db.php');
$query = "SELECT * FROM borrow";
$result = mysqli_query($con, $query);
?>

<?php
    $sql = "SELECT *, student.student_id AS studid, borrow.status AS brstat
    FROM borrow 
    LEFT JOIN student ON student.id=borrow.student_id 
    LEFT JOIN user_type ON user_type.id=student.utype
    LEFT JOIN book ON book.id=borrow.book_id ORDER BY date_borrow DESC LIMIT 5;";
    $query = $con->query($sql);
    while ($row = $query->fetch_assoc()) {
        if ($row['brstat']) {
            $status = '<span class="badge text-bg-success">returned</span>';
        } else {
            $status = '<span class="badge text-bg-warning">borrowed</span>';
        }
        ?>
        <tr>
            <td>
                <?php echo $row['studid'] ?>
            </td>
            <td>
                <?php echo $row['bcode'] ?>
            </td>
            <td>
                <?php echo $status ?>
            </td>
        </tr>
        <?php
    }
    ?>