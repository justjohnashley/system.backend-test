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
            $status = '<span class="badge text-bg-success">returned</span>';
        } else {
            $status = '<button class="btn btn-danger w-100 return" data-bs-toggle="modal" data-bs-target="#creturn" data-id="' . $row['itemid'] . '" >
                <span class="btn-label">
                    <i class="fas fa-undo-alt"></i></span>
                </button>';
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
                <?php echo date('M d, Y', strtotime($row['date_borrow'])) ?>
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