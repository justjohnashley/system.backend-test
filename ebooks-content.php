<tbody>
    <?php
    $sql = "SELECT *, ebooks.id AS ebookid, ebooks.ebook_cover AS cover FROM ebooks LEFT JOIN ebook_category ON ebook_category.id=ebooks.category_id $where";
    $query = $con->query($sql);
    while ($row = $query->fetch_assoc()) {
        ?>
        <tr>
            <td scope="row">
                <?php printf("%05d", $row['ebookid']) ?>
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
                <?php echo $row['cryear'] . ', ' . $row['placepub'] . ', ' . $row['publisher'] ?>
            </td>

            <td>
            <?php if (!empty($row['cover'])): ?>
                <img src="<?php echo htmlspecialchars($row['cover']); ?>" alt="eBook Cover" style="width:200px; height:75px; object-fit: cover;"
                data-bs-toggle="modal" data-bs-target="#eb_cover<?php echo $row['id']; ?>" data-ebook-cover="<?php echo htmlspecialchars($row['cover']); ?>">

                <div class="modal fade" id="eb_cover<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="coverModal<?php echo $row['id']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-m">
                    <div class="modal-content">
                        <div class="modal-body">
                        <img src="" id="modalCoverImage<?php echo $row['id']; ?>" alt="eBook Cover" style="width:100%; height:auto; object-fit: cover;">
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
                <div class="row w-100 d-flex justify-content-center align-items-center mx-1">
                <div class="col text-center p-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eb_view<?php echo $row['ebookid']; ?>">
                            <span class="btn-label">
                                <i class="far fa-eye"></i>
                            </span> 
                        </button>
                    </div>
                    <div class="col text-center p-0">
                        <button class="btn btn-warning edit" data-bs-toggle="modal" data-bs-target="#eb_edit"
                            data-id="<?php echo $row['ebookid'] ?>">
                            <span class="btn-label">
                                <i class="fas fa-pen"></i>
                            </span>

                        </button>
                    </div>
                    <div class="col text-center p-0">
                        <button class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#eb_delete"
                            data-id="<?php echo $row['ebookid'] ?>">
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
    <?php include 'modal/ebook-edit.php' ?>

    <?php include 'modal/ebook-view.php' ?>

    <?php include 'modal/ebook-delete.php' ?>

</tbody>

