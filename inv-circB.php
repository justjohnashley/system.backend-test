<?php
$sql = "SELECT *, borrow.id AS itemid, student.student_id AS studid, user_type.name AS usertype, borrow.status AS brstat
    FROM borrow 
    LEFT JOIN student ON student.id=borrow.student_id 
    LEFT JOIN user_type ON user_type.id=student.utype
    LEFT JOIN book ON book.id=borrow.book_id ORDER BY date_borrow DESC";
$query = $con->query($sql);
while ($row = $query->fetch_assoc()) {
    ?>
    <tr>
        <td>
            <?php echo date('M d, Y h:i A', strtotime($row['date_borrow'])); ?>
        </td>
        <td>
            <?php echo $row['usertype'] ?>
        </td>
        <td>
            <?php echo $row['studid'] ?>
        </td>
        <td>
            <?php echo $row['lname'] . ', ' . $row['fname'] ?>
        </td>
        <td>
            <?php echo $row['bcode'] ?>
        </td>
        <td>
            <?php echo $row['title'] ?>
        </td>


    </tr>
    <?php
}
?>