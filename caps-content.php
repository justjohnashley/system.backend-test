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
                <?php echo $row['cpcode'] ?>
            </td>
            <td>
                <?php echo $row['author'] ?>
            </td>
            <td>
                <?php echo $row['title'] ?>
            </td>
            <td>
                <?php echo $row['upyear'] ?>
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
                <div class="row g-1 w-100">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal4">
                        <span class="btn-label">
                            <i class="far fa-eye"></i>
                        </span>

                    </button>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal3">
                        <span class="btn-label">
                            <i class="fas fa-pen"></i>
                        </span>

                    </button>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal2">
                        <span class="btn-label">
                            <i class="far fa-trash-alt"></i>
                        </span>

                    </button>
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