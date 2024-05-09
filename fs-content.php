<tbody>
    <?php
    $sql = "SELECT *, feasibility.id AS fsid, feasibility.fs_cover AS cover FROM feasibility LEFT JOIN fs_category ON fs_category.id=feasibility.fs_type $where";
    $query = $con->query($sql);
    while ($row = $query->fetch_assoc()) {
        ?>
        <tr>
            <td scope="row">
                <?php printf("%05d", $row['fsid']) ?>
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
                <?php echo $row['upyear'] ?>
            </td>
            <td>
                <?php if (!empty($row['cover'])): ?>
                    <img src="<?php echo htmlspecialchars($row['cover']); ?>" alt="Book Cover"
                        style="widfs:200px; height:75px; object-fit: cover;" data-bs-toggle="modal" data-bs-target="#fscover"
                        data-feasibility-cover="<?php echo htmlspecialchars($row['cover']); ?>">

                    <div class="modal fade" id="fscover" tabindex="-1" aria-labelledby="coverModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-m">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="" id="modalCoverImage" alt="Book Cover"
                                        style="widfs:100%; height:auto; object-fit: cover;">
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
                            data-bs-target="#fsview<?php echo $row['fsid']; ?>">
                            <span class="btn-label">
                                <i class="far fa-eye"></i>
                            </span>

                        </button>
                    </div>
                    <div class="col text-center p-0">
                        <button class="btn btn-warning edit" data-bs-toggle="modal" data-bs-target="#fsedit"
                            data-id="<?php echo $row['fsid'] ?>">
                            <span class="btn-label">
                                <i class="fas fa-pen"></i>
                            </span>

                        </button>
                    </div>
                    <div class="col text-center p-0">
                        <button class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#fsdelete"
                            data-id="<?php echo $row['fsid'] ?>">
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
    <?php include 'modal/fs-edit.php' ?>

    <?php include 'modal/fs-view.php' ?>

    <?php include 'modal/fs-delete.php' ?>


</tbody>