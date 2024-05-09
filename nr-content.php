<tbody>
    <?php
    $sql = "SELECT *, nreport.id AS nrid, nreport.nr_cover AS cover FROM nreport LEFT JOIN nr_category ON nr_category.id=nreport.nr_type $where";
    $query = $con->query($sql);
    while ($row = $query->fetch_assoc()) {
        ?>
        <tr>
            <td scope="row">
                <?php printf("%05d", $row['nrid']) ?>
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
                <img src="<?php echo htmlspecialchars($row['cover']); ?>" alt="Book Cover" style="widnr:200px; height:75px; object-fit: cover;"
                data-bs-toggle="modal" data-bs-target="#nrcover" data-nreport-cover="<?php echo htmlspecialchars($row['cover']); ?>">

                <div class="modal fade" id="nrcover" tabindex="-1" aria-labelledby="coverModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-m">
                    <div class="modal-content">
                        <div class="modal-body">
                        <img src="" id="modalCoverImage" alt="Book Cover" style="widnr:100%; height:auto; object-fit: cover;">
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
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nrview<?php echo $row['nrid']; ?>">
                        <span class="btn-label">
                            <i class="far fa-eye"></i>
                        </span>

                    </button></div>
                    <div class="col text-center p-0">
                    <button class="btn btn-warning edit" data-bs-toggle="modal" data-bs-target="#nredit"
                        data-id="<?php echo $row['nrid'] ?>">
                        <span class="btn-label">
                            <i class="fas fa-pen"></i>
                        </span>

                    </button></div>
                    <div class="col text-center p-0">
                    <button class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#nrdelete"
                        data-id="<?php echo $row['nrid'] ?>">
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
    <?php include 'modal/nr-edit.php' ?>

    <?php include 'modal/nr-view.php' ?>

    <?php include 'modal/nr-delete.php' ?>


</tbody>