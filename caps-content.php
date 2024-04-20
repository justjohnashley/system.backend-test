<tbody>
    <?php
    $sql = "SELECT *, capstone.id AS capid FROM capstone LEFT JOIN cap_category ON cap_category.id=capstone.cap_type $where";
    $query = $con->query($sql);
    while ($row = $query->fetch_assoc()) {
        ?>
        <tr>
            <td scope="row">
                <?php printf("%05d", $row['capid']) ?>
            </td>
            <td>
                <?php echo $row['code'] ?>
            </td>
            <td>
                <?php echo $row['name'] ?>
            </td>
            <td>
                <?php echo $row['author'] ?>
            </td>
            <td>
                <?php echo $row['title'] ?>
            </td>
            <td>
                <?php echo date('M d, Y', strtotime($row['upyear'])) ?>
            </td>
            <td>

                <div class="row p-2 d-flex justify-content-center">
                    <button class="btn btn-outline-success">
                        <span class="btn-label">
                            <i class="far fa-file-image"></i>
                        </span><br>
                        No cover uploaded
                    </button>
                </div>
            </td>
            <td>
                <div class="row gy-1 w-100 d-flex justify-content-center mx-1">
                    <div class="col text-center p-0">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cpview">
                        <span class="btn-label">
                            <i class="far fa-eye"></i>
                        </span>

                    </button></div>
                    <div class="col text-center p-0">
                    <button class="btn btn-warning edit" data-bs-toggle="modal" data-bs-target="#cpedit"
                        data-id="<?php echo $row['capid'] ?>">
                        <span class="btn-label">
                            <i class="fas fa-pen"></i>
                        </span>

                    </button></div>
                    <div class="col text-center p-0">
                    <button class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#cpdelete"
                        data-id="<?php echo $row['capid'] ?>">
                        <span class="btn-label">
                            <i class="far fa-trash-alt"></i>
                        </span>

                    </button></div>
                </div>
            </td>
        </tr>
        <?php
    }
    ?>
    <?php include 'modal/caps-edit.php' ?>

    <?php include 'modal/caps-view.php' ?>

    <?php include 'modal/caps-delete.php' ?>


</tbody>