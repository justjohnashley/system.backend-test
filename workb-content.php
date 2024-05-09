<tbody>
    <?php
    $sql = "SELECT *, workbook.id AS wbid, workbook.wb_cover AS cover FROM workbook LEFT JOIN wb_category ON wb_category.id=workbook.wb_type $where";
    $query = $con->query($sql);
    while ($row = $query->fetch_assoc()) {
        ?>
        <tr>
            <td scope="row">
                <?php printf("%05d", $row['wbid']) ?>
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
                <?php echo $row['date_added'] ?>
            </td>
            <td>
                <?php if (!empty($row['cover'])): ?>
                    <img src="<?php echo htmlspecialchars($row['cover']); ?>" alt="Book Cover"
                        style="width:200px; height:75px; object-fit: cover;" data-bs-toggle="modal" data-bs-target="#cpcover"
                        data-cap-cover="<?php echo htmlspecialchars($row['cover']); ?>">

                    <div class="modal fade" id="cpcover" tabindex="-1" aria-labelledby="coverModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-m">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="" id="modalCoverImage" alt="Book Cover"
                                        style="width:100%; height:auto; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </div>

                <?php else: ?>
                    <button class="btn btn-outline-success">
                        <span class="btn-label">
                            <i class="far fa-file-image"></i>
                        </span><br>
                        No cover uploaded
                    </button>
                <?php endif; ?>
            </td>
            <td>
                <div class="row gy-1 w-100 d-flex justify-content-center mx-1">
                    <div class="col text-center p-0">
                        <button class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#wbview<?php echo $row['wbid']; ?>">
                            <span class="btn-label">
                                <i class="far fa-eye"></i>
                            </span>

                        </button>
                    </div>
                    <div class="col text-center p-0">
                        <button class="btn btn-warning edit" data-bs-toggle="modal" data-bs-target="#wbedit"
                            data-id="<?php echo $row['wbid'] ?>">
                            <span class="btn-label">
                                <i class="fas fa-pen"></i>
                            </span>

                        </button>
                    </div>
                    <div class="col text-center p-0">
                        <button class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#wbdelete"
                            data-id="<?php echo $row['wbid'] ?>">
                            <span class="btn-label">
                                <i class="far fa-trash-alt"></i>
                            </span>

                        </button>
                    </div>
                </div>
            </td>
        </tr>
        <?php
    }
    ?>
    <?php include 'modal/wb-edit.php' ?>

    <?php include 'modal/wb-view.php' ?>

    <?php include 'modal/wb-delete.php' ?>


</tbody>