<tbody>
    <?php
    $sql = "SELECT *, clippings.id AS clipid FROM clippings LEFT JOIN clippings_category ON clippings_category.id=clippings.category_id $where";
    $query = $con->query($sql);
    while ($row = $query->fetch_assoc()) {
        ?>
        <tr>
            <td scope="row">
                <?php printf("%05d", $row['clipid']) ?>
            </td>
            <td>
                <?php echo $row['name'] ?>
            </td>
            <td>
                <?php echo $row['title'] ?>
            </td>
            <td>
                <?php echo $row['newspaper'] ?>
            </td>
            <td>
                <?php echo $row['datepub'] ?>
            </td>

            <td>
                <div class="row w-100 d-flex justify-content-center align-items-center mx-1">
                <div class="col text-center p-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#clip_view<?php echo $row['clipid']; ?>">
                            <span class="btn-label">
                                <i class="far fa-eye"></i>
                            </span> 
                        </button>
                    </div>
                    <div class="col text-center p-0">
                        <button class="btn btn-warning edit" data-bs-toggle="modal" data-bs-target="#clip_edit"
                            data-id="<?php echo $row['clipid'] ?>">
                            <span class="btn-label">
                                <i class="fas fa-pen"></i>
                            </span>

                        </button>
                    </div>
                    <div class="col text-center p-0">
                        <button class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#clip_delete"
                            data-id="<?php echo $row['clipid'] ?>">
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
    <?php include 'modal/clip-edit.php' ?>

    <?php include 'modal/clip-view.php' ?>

    <?php include 'modal/clip-delete.php' ?>

</tbody>

<!-- <script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(item => {
        item.addEventListener('click', function() {
            var ebookCover = this.getAttribute('data-ebook-cover');
            var targetID = this.getAttribute('data-bs-target');
            var modalImage = document.querySelector(targetID + ' img');
            modalImage.src = ebookCover;
        });
    });
});
</script> -->