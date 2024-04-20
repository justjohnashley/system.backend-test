<tbody class="table-group-divider">
    <?php
    $sql = "SELECT *, borrow.id AS itemid, student.student_id AS studid, user_type.name AS usertype, borrow.status AS brstat
    FROM borrow 
    LEFT JOIN student ON student.id=borrow.student_id 
    LEFT JOIN user_type ON user_type.id=student.utype
    LEFT JOIN book ON book.id=borrow.book_id ORDER BY date_borrow DESC";
    $query = $con->query($sql);
    while ($row = $query->fetch_assoc()) {
        if ($row['brstat']) {
            $status = '<span class="badge text-bg-success p-2">returned</span>';
        } else {
            $status = '<a class="return" data-bs-toggle="modal" data-bs-target="#creturn" data-id="' . $row['itemid'] . '"><span class="badge text-bg-danger p-2">
                unreturned
                </span></a>';
        }
        ?>
        <tr>
            <td scope="row">
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
            <td>
                <?php echo date('M d, Y h:i A', strtotime($row['date_borrow'])) ?>
            </td>
            <td>
                <?php echo $status ?>
            </td>
        </tr>
        <?php
    }
    ?>

    <?php include 'circ-return.php'; ?>


</tbody>