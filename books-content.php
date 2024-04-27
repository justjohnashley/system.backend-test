<tbody>
    <?php
    $sql = "SELECT *, book.id AS bookid FROM book LEFT JOIN book_category ON book_category.id=book.category_id $where";
    $query = $con->query($sql);
    while ($row = $query->fetch_assoc()) {
        ?>
        <tr>
            <td scope="row">
                <?php printf("%05d", $row['bookid']) ?>
            </td>
            <td>
                <?php echo $row['bcode'] ?>
            </td>
            <td>
                <?php echo $row['name'] ?>
            </td>
            <td>
                <?php echo $row['title'] ?>
            </td>
            <td>
                <?php echo $row['author'] ?>
            </td>
            <td>
                <?php echo $row['cryear'] .', ' . $row['placepub'] .', '. $row['publisher']?>
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
                <div class="row w-100 d-flex justify-content-center align-items-center mx-1">
                    <div class="col text-center p-0">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bmview">
                        <span class="btn-label">
                            <i class="far fa-eye"></i>
                        </span>

                    </button></div>
                    <div class="col text-center p-0">
                    <button class="btn btn-warning edit" data-bs-toggle="modal" data-bs-target="#bmedit"
                        data-id="<?php echo $row['bookid'] ?>">
                        <span class="btn-label">
                            <i class="fas fa-pen"></i>
                        </span>

                    </button></div>
                    <div class="col text-center p-0">
                    <button class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#bmdelete"
                        data-id="<?php echo $row['bookid'] ?>">
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
    <?php include 'modal/book-edit.php' ?>

    <?php include 'modal/book-view.php' ?>

    <?php include 'modal/book-delete.php' ?>

</tbody>